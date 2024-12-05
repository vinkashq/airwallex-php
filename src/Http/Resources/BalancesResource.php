<?php

namespace Vinkas\Airwallex\Http\Resources;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Vinkas\Airwallex\Http\Balances\CurrentRequest;

class BalancesResource extends BaseResource
{
    public function getCurrent(): Response
    {
        return $this->connector->send(new CurrentRequest());
    }
}
