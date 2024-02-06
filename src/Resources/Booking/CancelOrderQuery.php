<?php

namespace Selena\Resources\Booking;

use Selena\Parents\BasicQuery;

class CancelOrderQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/cancel-order";
    protected string $method = "DELETE";

    protected function bindUrl(): void
    {
        $this->url .= "/{$this->payload['id']}";
    }

    protected function expectPayloadKeys(): array
    {
        return ['id'];
    }
}
