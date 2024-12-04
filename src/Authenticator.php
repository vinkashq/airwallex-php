<?php

namespace Vinkas\Airwallex;

use Saloon\Http\PendingRequest;
use Saloon\Contracts\Authenticator as AuthenticatorContract;
use Vinkas\Airwallex\Http\Authentication\LoginRequest;

class Authenticator implements AuthenticatorContract
{
    public function set(PendingRequest $pendingRequest): void
    {
        /** @phpstan-var Connector $connector */
        $connector = $pendingRequest->getConnector();

        if (!$connector->isAuthorized()) {
            $loginRequest = new LoginRequest();

            $response = $connector->send($loginRequest);

            $connector->setToken($response->object()->token);
        }

        $pendingRequest->headers()->add('Authorization', 'Bearer ' . $connector->getToken());
    }
}

