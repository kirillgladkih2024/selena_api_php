<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class ApartmentPriceQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/apartmentprice";
    protected string $method = "GET";

    protected function expectPayloadKeys(): array
    {
        return !empty($this->payload) ? [] : ['apartmentid'];
    }

    protected function bindUrl(): void
    {
        $apartmentId = $this->payload['apartmentid'] ?? '';
        $this->url .= "/{$apartmentId}";
    }

    protected function bindingParams(): array
    {
        return ["objectid", "tourid", "tourpackid", "duration", "priceid", "begindate"];
    }
}
