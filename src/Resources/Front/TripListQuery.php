<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class TripListQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/triplist";
    protected string $method = "GET";

    protected function bindUrl(): void
    {
        $this->url .= "/{$this->payload['tourid']}";
    }

    protected function expectPayloadKeys(): array
    {
        return ['tourid'];
    }
}
