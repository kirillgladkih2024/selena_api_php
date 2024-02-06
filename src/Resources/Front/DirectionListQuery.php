<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class DirectionListQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/directionlist/1";
    protected string $method = "GET";
}
