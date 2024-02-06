<?php

namespace Selena\Parents;

abstract class BasicQuery
{
    protected string $method = "GET";
    protected string $url = "";
    protected array $headers = [];
    protected mixed $body = null;
    protected string $version = '1.1';

    public function __construct(
        protected array $payload = []
    )
    {
        $this->checkExpectedOptions();
        $this->bindUrl();
        $this->bindParamsToUrl();
        $this->bindBody();
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getBody(): mixed
    {
        return $this->body;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    protected function bindParamsToUrl(): void
    {
        $params = array_intersect_key($this->payload, array_flip($this->bindingParams()));
        if (!empty($params)) {
            $this->url = $this->url . "?" . http_build_query($params);
        }
    }

    protected function bindUrl(): void
    {
    }

    protected function bindBody(): void
    {
    }

    protected function bindingParams(): array
    {
        return [];
    }

    protected function expectPayloadKeys(): array
    {
        return [];
    }

    protected function checkExpectedOptions(): void
    {
        foreach ($this->expectPayloadKeys() as $expectedOptionKey) {
            if (!isset($this->payload[$expectedOptionKey])) {
                throw new  \UnexpectedValueException("$expectedOptionKey not found in payload");
            }
        }
    }
}
