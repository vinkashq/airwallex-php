<?php

namespace Vinkas\Airwallex\Http\Authentication;

use Saloon\Http\PendingRequest;
use Saloon\Contracts\Authenticator as AuthenticatorContract;

class Authenticator implements AuthenticatorContract
{
    public function set(PendingRequest $pendingRequest): void
    {
        $pendingRequest->headers()->add('x-client-id', $_ENV['AIRWALLEX_CLIENT_ID']);
        $pendingRequest->headers()->add('x-api-key', $_ENV['AIRWALLEX_API_KEY']);
    }
}

