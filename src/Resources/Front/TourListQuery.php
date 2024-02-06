<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class TourListQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/tourlist";
    protected string $method = "GET";

    protected function bindUrl(): void
    {
        $this->url .= "/{$this->payload["objectid"]}";
    }

    protected function expectPayloadKeys(): array
    {
        return ["objectid"];
    }

    protected function bindingParams(): array
    {
        return ["tourid", "tdesc", "from", "to", "fromcityid", "tocityid", "stopcityid"];
    }
}
