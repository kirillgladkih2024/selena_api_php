<?php

namespace Selena;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;
use Selena\Contracts\ResponderContract;
use Selena\Parents\BasicApi;
use Selena\Resources\Booking\CancelOrderQuery;
use Selena\Resources\Booking\ReserveQuery;

readonly class BookingApi extends BasicApi
{
    /**@throws ClientExceptionInterface */
    public function reserve(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new ReserveQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function cancelOrder(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new CancelOrderQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function dispatch(...$args): ResponseInterface
    {
        return $this->respond(...$args);
    }
}
