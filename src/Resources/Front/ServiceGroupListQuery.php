<?php

namespace Selena\Resources\Front;


use Selena\Parents\BasicQuery;

class ServiceGroupListQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/servicegrouplist";
    protected string $method = "GET";

    protected function bindUrl(): void
    {
        $this->url .= "/{$this->payload['objectid']}";
    }

    protected function expectPayloadKeys(): array
    {
        return ['objectid'];
    }

    protected function bindingParams(): array
    {
        return ["tourid", "apartmentid", "servicegroupid"];
    }
}
