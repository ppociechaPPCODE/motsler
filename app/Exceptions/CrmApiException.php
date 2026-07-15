<?php

declare(strict_types=1);

namespace App\Exceptions;

use RuntimeException;

final class CrmApiException extends RuntimeException
{
    public function __construct(
        string $message,
        private readonly string $errorCode = 'api_error',
        private readonly int $statusCode = 500,
        ?\Throwable $previous = null,
    ) {
        parent::__construct($message, $statusCode, $previous);
    }

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function isNotFound(): bool
    {
        return 404 === $this->statusCode || 'not_found' === $this->errorCode;
    }

    public function isUnauthorized(): bool
    {
        return 401 === $this->statusCode || 'unauthorized' === $this->errorCode;
    }
}
