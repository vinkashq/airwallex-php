<?php

namespace Vinkas\Airwallex\Http\Authentication;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class LoginRequest extends Request
{
    public const ENDPOINT = '/authentication/login';

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return static::ENDPOINT;
    }

    protected function defaultAuth(): Authenticator
    {
        return new Authenticator();
    }
}
