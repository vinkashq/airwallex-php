<?php

namespace Vinkas\Airwallex;

use Saloon\Http\Connector as SaloonConnector;

class Connector extends SaloonConnector
{
    protected const TOKEN_KEY = 'AIRWALLEX_TOKEN';

    public function resolveBaseUrl(): string
    {
        return 'https://api.airwallex.com/api/v1';
    }

    protected function defaultAuth(): Authenticator
    {
        return new Authenticator();
    }

    protected function defaultHeaders(): array
    {
        return [
          'Content-Type' => 'application/json',
        ];
    }

    public function isAuthorized(): bool
    {
        return isset($_ENV[static::TOKEN_KEY]);
    }

    public function getToken(): string
    {
        return $_ENV[static::TOKEN_KEY];
    }

    public function setToken(string $token): void
    {
        $_ENV[static::TOKEN_KEY] = $token;
    }
}
