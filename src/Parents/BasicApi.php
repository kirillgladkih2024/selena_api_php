<?php

namespace Selena\Parents;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Selena\Contracts\ApiContract;
use Selena\Contracts\ResponderContract;

abstract readonly class BasicApi implements ApiContract
{
    public function __construct(
        protected ClientInterface $client
    )
    {
    }

    /** @throws ClientExceptionInterface */
    protected function respond(BasicQuery $query, ?ResponderContract $responder = null): ResponseInterface
    {
        return is_null($responder)
            ? $this->defaultResponder($query)
            : $responder->handle(client: $this->client, query: $query);
    }

    /** @throws ClientExceptionInterface */
    protected function defaultResponder(BasicQuery $query): ResponseInterface
    {
        $request = new Request($query->getMethod(), $query->getUrl(), $query->getHeaders(), $query->getBody(), $query->getVersion());
        return $this->client->sendRequest($request);
    }
}
