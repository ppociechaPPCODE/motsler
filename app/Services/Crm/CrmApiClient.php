<?php

declare(strict_types=1);

namespace App\Services\Crm;

use App\Exceptions\CrmApiException;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

final class CrmApiClient
{
    private const OFFER_TOKEN_PATTERN = '/^[a-f0-9]{64}$/';

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $apiKey,
        private readonly int $timeout = 10,
    ) {
    }

    public static function fromConfig(): self
    {
        return new self(
            baseUrl: (string) config('crm.base_url'),
            apiKey: (string) config('crm.api_key'),
            timeout: (int) config('crm.timeout', 10),
        );
    }

    /**
     * @return array{version: string, company: array{id: int, name: string, website: ?string}}
     */
    public function status(): array
    {
        return $this->request('GET', '/api/v1');
    }

    /**
     * @return array{html: string, locale: string, token: string, view_count: int, first_view: bool}
     */
    public function getOffer(string $token): array
    {
        if (!self::isValidOfferToken($token)) {
            throw new CrmApiException('Nieprawidłowy token oferty.', 'invalid_token', 400);
        }

        return $this->request('GET', '/api/v1/offers/'.$token);
    }

    public static function isValidOfferToken(string $token): bool
    {
        return 1 === preg_match(self::OFFER_TOKEN_PATTERN, $token);
    }

    /**
     * Wyciąga token z pełnego URL linku oferty (np. z maila).
     */
    public static function extractTokenFromUrl(string $url): ?string
    {
        if (1 !== preg_match('#/offer/([a-f0-9]{64})(?:[/?#]|$)#', $url, $matches)) {
            return null;
        }

        return $matches[1];
    }

    /**
     * @return array<string, mixed>
     */
    private function request(string $method, string $path): array
    {
        $this->assertConfigured();

        $url = rtrim($this->baseUrl, '/').$path;

        try {
            $response = Http::timeout($this->timeout)
                ->acceptJson()
                ->withToken($this->apiKey)
                ->send($method, $url);
        } catch (ConnectionException $e) {
            throw new CrmApiException('Brak połączenia z CRM.', 'connection_error', 503, $e);
        } catch (RequestException $e) {
            throw new CrmApiException('Błąd komunikacji z CRM.', 'request_error', 502, $e);
        }

        /** @var array{success?: bool, data?: array<string, mixed>, error?: array{code?: string, message?: string}} $payload */
        $payload = $response->json() ?? [];

        if ($response->successful() && ($payload['success'] ?? false) && isset($payload['data'])) {
            /** @var array<string, mixed> $data */
            $data = $payload['data'];

            return $data;
        }

        $errorCode = (string) ($payload['error']['code'] ?? 'api_error');
        $message = (string) ($payload['error']['message'] ?? 'Nieznany błąd API CRM.');

        throw new CrmApiException($message, $errorCode, $response->status());
    }

    private function assertConfigured(): void
    {
        if ('' === trim($this->baseUrl) || '' === trim($this->apiKey)) {
            throw new CrmApiException(
                'CRM nie jest skonfigurowane. Ustaw CRM_BASE_URL i CRM_API_KEY w .env.',
                'not_configured',
                500,
            );
        }
    }
}
