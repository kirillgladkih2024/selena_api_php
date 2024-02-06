<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class ObjectListQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/objectlist";
    protected string $method = "GET";

    protected function bindUrl(): void
    {
        $this->url .= "/{$this->payload['regionid']}";
    }

    protected function expectPayloadKeys(): array
    {
        return ['regionid'];
    }

    protected function bindingParams(): array
    {
        return ['objectid'];
    }
}
