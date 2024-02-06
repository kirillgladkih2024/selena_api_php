<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class TourDirectionListQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/tourdirectionlist";
    protected string $method = "GET";

    protected function bindUrl(): void
    {
        $this->url .= "/{$this->payload['dirid']}";
    }

    protected function expectPayloadKeys(): array
    {
        return ["dirid"];
    }

    protected function bindingParams(): array
    {
        return ["tourdirid"];
    }

}
