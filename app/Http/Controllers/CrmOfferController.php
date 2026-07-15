<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Exceptions\CrmApiException;
use App\Services\Crm\CrmApiClient;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

final class CrmOfferController extends Controller
{
    public function __construct(
        private readonly CrmApiClient $crmApi,
    ) {
    }

    public function show(string $token): View|Response
    {
        if (!CrmApiClient::isValidOfferToken($token)) {
            abort(404);
        }

        try {
            $offer = $this->crmApi->getOffer($token);
        } catch (CrmApiException $e) {
            if ($e->isNotFound()) {
                abort(404);
            }

            if ($e->isUnauthorized()) {
                abort(500, 'Błąd konfiguracji integracji z CRM.');
            }

            abort(503, 'Oferta jest chwilowo niedostępna.');
        }

        return response()
            ->view('crm.offer', [
                'html' => $offer['html'],
                'locale' => $offer['locale'],
            ])
            ->header('Content-Language', (string) $offer['locale']);
    }
}
