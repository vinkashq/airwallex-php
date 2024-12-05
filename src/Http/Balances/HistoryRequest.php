<?php

namespace Vinkas\Airwallex\Http\Balances;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class HistoryRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return 'balances/history';
    }
}
