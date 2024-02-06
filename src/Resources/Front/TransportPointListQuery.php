<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class TransportPointListQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/transportpointlist";
    protected string $method = "GET";
}
