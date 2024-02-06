<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class TourStandListQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/tourstandlist";
    protected string $method = "GET";

    protected function bindUrl(): void
    {
        $this->url .= "/{$this->payload["tourid"]}";
    }

    protected function expectPayloadKeys(): array
    {
        return ["tourid"];
    }

    protected function bindingParams(): array
    {
        return ["tourstandid"];
    }
}
