<?php

namespace Selena\Tests\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\Attributes\DataProvider;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Selena\BookingApi;
use Selena\Contracts\ResponderContract;
use Selena\DocApi;
use Selena\FrontApi;
use Selena\Parents\BasicApi;
use Selena\Parents\BasicQuery;
use Selena\Resources\Booking\ReserveQuery;
use Selena\Resources\Doc\OrdersQuery;
use Selena\Resources\Front\ApartmentListQuery;
use Selena\Resources\Sync\GetEventListQuery;
use Selena\SyncApi;
use Selena\Tests\BasicTetCase;

class ApiFacadesTest extends BasicTetCase
{
    #[DataProvider('apiFacadesProvider')]
    public function testDispatchMethodForApis(BasicApi $api, BasicQuery $query): void
    {
        $response = $api->dispatch(query: $query);
        $this->assertInstanceOf(ResponseInterface::class, $response);
    }

    #[DataProvider('apiFacadesProviderForTestClientException')]
    public function testDispatchClientExceptionInterface(BasicApi $api, BasicQuery $query, ResponderContract $responder): void
    {
        $this->expectException(ClientExceptionInterface::class);
        $api->dispatch(query: $query, responder: $responder);
    }

    public static function apiFacadesProvider(): array
    {
        $client = new Client();
        return [
            [new FrontApi($client), new ApartmentListQuery(['objectid' => 9])],
            [new DocApi($client), new OrdersQuery()],
            [
                new BookingApi($client),
                new ReserveQuery([
                    'order' => ['tourid' => 1],
                    'tourists' => ['tourist' => 1],
                    'commit' => false
                ])
            ],
            [new SyncApi($client), new GetEventListQuery()],
        ];
    }

    public static function apiFacadesProviderForTestClientException(): array
    {
        $client = new Client();
        $responder = new class implements ResponderContract {
            public function handle(ClientInterface $client, BasicQuery $query)
            {
                $request = new Request('ERROR', 'ERROR', $query->getHeaders(), $query->getBody(), $query->getVersion());
                return $client->sendRequest($request);
            }
        };
        return [
            [new FrontApi($client), new ApartmentListQuery(['objectid' => 9]), $responder],
            [new DocApi($client), new OrdersQuery(), $responder],
            [
                new BookingApi($client),
                new ReserveQuery([
                    'order' => ['tourid' => 1],
                    'tourists' => ['tourist' => 1],
                    'commit' => false
                ]),
                $responder
            ],
            [new SyncApi($client), new GetEventListQuery(), $responder],
        ];
    }
}
