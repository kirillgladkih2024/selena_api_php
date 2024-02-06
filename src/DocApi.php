<?php

namespace Selena;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;
use Selena\Contracts\ResponderContract;
use Selena\Parents\BasicApi;
use Selena\Resources\Doc\OrdersQuery;

readonly class DocApi extends BasicApi
{
    /**@throws ClientExceptionInterface */
    public function orders(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new OrdersQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function dispatch(...$args): ResponseInterface
    {
        return $this->respond(...$args);
    }
}
