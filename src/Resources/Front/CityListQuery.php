<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class CityListQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/citylist";
    protected string $method = "GET";

    protected function bindUrl(): void
    {
        if ($cityId = $this->payload["cityid"] ?? null) {

            $this->url .= "/$cityId";

        }
    }

    protected function bindingParams(): array
    {
        return ["fias_guid", "name"];
    }
}
