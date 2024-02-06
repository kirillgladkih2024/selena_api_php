<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class RegionListQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/regionlist/1";
    protected string $method = "GET";
}
