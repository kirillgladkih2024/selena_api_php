<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class RoomListQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/roomlist";
    protected string $method = "GET";

    protected function bindUrl(): void
    {
        $this->url .= "/{$this->payload['apartmentid']}";
    }

    protected function expectPayloadKeys(): array
    {
        return ['apartmentid'];
    }

    protected function bindingParams(): array
    {
        return ['roomid'];
    }
}
