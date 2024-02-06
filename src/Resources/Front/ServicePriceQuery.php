<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class ServicePriceQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/serviceprice";
    protected string $method = "GET";

    protected function bindUrl(): void
    {
        $this->url .= "/{$this->payload['serviceid']}";
    }

    protected function expectPayloadKeys(): array
    {
        return ['serviceid'];
    }

    protected function bindingParams(): array
    {
        return ["tourid", "priceid", "begindate"];
    }
}
