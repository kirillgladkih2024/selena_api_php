<?php

namespace Selena\Resources\Booking;

use Selena\Parents\BasicQuery;

class ReserveQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/reserve";
    protected string $method = "PUT";
    protected array $headers = ["content-type" => "application/json"];

    protected function expectPayloadKeys(): array
    {
        return ["commit", "order", "tourists"];
    }

    protected function bindBody(): void
    {
        $data = [
            "order" => $this->payload["order"] ?? [],
            "commit" => $this->payload["commit"] ?? false,
            "tourists" => $this->payload["tourists"] ?? []
        ];
        $this->body = json_encode($data);
    }
}
