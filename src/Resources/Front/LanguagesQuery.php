<?php

namespace Selena\Resources\Front;

use Selena\Parents\BasicQuery;

class LanguagesQuery extends BasicQuery
{
    protected string $url = "https://selena-online.ru/rest/v1/languages";
    protected string $method = "GET";
}
