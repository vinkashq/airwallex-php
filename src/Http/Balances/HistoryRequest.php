<?php

namespace Vinkas\Airwallex\Http\Balances;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class HistoryRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(readonly ?string $from = null, readonly ?string $to = null, readonly ?string $page = null, readonly ?string $currency = null) { }

    protected function defaultQuery(): array
    {
        $query = parent::defaultQuery();

        if (isset($this->from)) {
            $query['from_post_at'] = $this->from;
        }

        if (isset($this->to)) {
            $query['to_post_at'] = $this->to;
        }

        if (isset($this->page)) {
            $query['page'] = $this->page;
        }

        if (isset($this->currency)) {
            $query['currency'] = $this->currency;
        }

        return $query;
    }

    public function resolveEndpoint(): string
    {
        return 'balances/history';
    }
}
