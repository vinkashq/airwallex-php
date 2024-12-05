<?php

namespace Vinkas\Airwallex\Traits;

use Vinkas\Airwallex\Http\Resources\BalancesResource;

trait HandlesApi
{
    public function getBalances(): BalancesResource
    {
        return new BalancesResource($this->getConnector());
    }
}
