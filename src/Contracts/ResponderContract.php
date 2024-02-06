<?php

namespace Selena\Contracts;

use Psr\Http\Client\ClientInterface;
use Selena\Parents\BasicQuery;

interface ResponderContract
{
    public function handle(ClientInterface $client, BasicQuery $query);
}
