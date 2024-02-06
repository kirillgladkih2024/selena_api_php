<?php

namespace Selena\Contracts;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;

interface ApiContract
{
    /**@throws ClientExceptionInterface */
    public function dispatch(...$args): ResponseInterface;
}
