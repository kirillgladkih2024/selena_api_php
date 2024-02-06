<?php

namespace Selena;


use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;
use Selena\Contracts\ResponderContract;
use Selena\Parents\BasicApi;
use Selena\Resources\Sync\GetEventListQuery;

readonly class SyncApi extends BasicApi
{
    /**@throws ClientExceptionInterface */
    public function eventList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new GetEventListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function dispatch(...$args): ResponseInterface
    {
        return $this->respond(...$args);
    }
}
