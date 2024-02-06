<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class TransportListQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/transportlist";
    protected string $method = "GET";

    protected function bindingParams(): array
    {
        return ["id"];
    }

}
