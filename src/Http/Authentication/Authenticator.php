<?php

namespace Vinkas\Airwallex\Http\Authentication;

use Saloon\Http\PendingRequest;
use Saloon\Contracts\Authenticator as AuthenticatorContract;

class Authenticator implements AuthenticatorContract
{
    public function set(PendingRequest $pendingRequest): void
    {
        /** @phpstan-var \Vinkas\Airwallex\Connector $connector */
        $connector = $pendingRequest->getConnector();

        $pendingRequest->headers()->add('x-client-id', $connector->getClientId());
        $pendingRequest->headers()->add('x-api-key', $connector->getApiKey());
    }
}

