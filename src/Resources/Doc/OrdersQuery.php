<?php

namespace Selena\Resources\Doc;

use Selena\Parents\BasicQuery;

class OrdersQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/orders/";
    protected string $method = "GET";

    protected function bindingParams(): array
    {
        return ['tourid', 'objectid'];
    }

    protected function bindUrl(): void
    {
        if (isset($this->payload['orderids'])) {
            $this->url .= implode(",", $this->payload['orderids']);
        }
    }
}
