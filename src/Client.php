<?php

namespace Vinkas\Airwallex;

use Vinkas\Airwallex\Traits\HandlesApi;

class Client
{
    use HandlesApi;

    public function getConnector(): Connector
    {
        return new Connector();
    }
}
