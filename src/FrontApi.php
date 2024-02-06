<?php

namespace Selena;

use Psr\Http\Message\ResponseInterface;
use Selena\Contracts\ResponderContract;
use Selena\Parents\BasicApi;
use Selena\Resources\Front\ApartmentListQuery;
use Selena\Resources\Front\ApartmentPriceQuery;
use Selena\Resources\Front\CityListQuery;
use Selena\Resources\Front\DirectionListQuery;
use Selena\Resources\Front\DiscountListQuery;
use Selena\Resources\Front\LanguagesQuery;
use Selena\Resources\Front\ObjectListQuery;
use Selena\Resources\Front\OffersQuery;
use Selena\Resources\Front\RegionListQuery;
use Selena\Resources\Front\RoomListQuery;
use Selena\Resources\Front\RoomOccupiedSexQuery;
use Selena\Resources\Front\ServiceGroupListQuery;
use Selena\Resources\Front\ServiceListQuery;
use Selena\Resources\Front\ServicePriceQuery;
use Selena\Resources\Front\TourDirectionListQuery;
use Selena\Resources\Front\TourListQuery;
use Selena\Resources\Front\TourPackListQuery;
use Selena\Resources\Front\TourStandListQuery;
use Selena\Resources\Front\TransportListQuery;
use Selena\Resources\Front\TransportPointListQuery;
use Selena\Resources\Front\TripListQuery;
use Selena\Resources\Front\UnitListQuery;
use Psr\Http\Client\ClientExceptionInterface;

readonly class FrontApi extends BasicApi
{
    /**@throws ClientExceptionInterface */
    public function apartmentList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new ApartmentListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function cityList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new CityListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function directionList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new DirectionListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function discountList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new DiscountListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function languages(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new LanguagesQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function objectList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new ObjectListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function offers(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new OffersQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function regionList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new RegionListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function roomList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new RoomListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function roomOccupiedSex(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new RoomOccupiedSexQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function serviceGroupList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new ServiceGroupListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function serviceList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new ServiceListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function servicePrice(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new ServicePriceQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function apartmentPrice(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new ApartmentPriceQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function tourDirectionList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new TourDirectionListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function tourList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new TourListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function tourPackList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new TourPackListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function tourStandList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new TourStandListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function transportList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new TransportListQuery($payload);
        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function transportPointList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new TransportPointListQuery($payload);

        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function tripListQuery(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new TripListQuery($payload);

        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function unitList(array $payload = [], ?ResponderContract $responder = null): ResponseInterface
    {
        $query = new UnitListQuery($payload);

        return $this->dispatch(query: $query, responder: $responder);
    }

    /**@throws ClientExceptionInterface */
    public function dispatch(...$args): ResponseInterface
    {
        return $this->respond(...$args);
    }
}
