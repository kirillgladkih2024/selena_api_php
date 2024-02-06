<?php

namespace Selena\Resources\Sync;

use Selena\Parents\BasicQuery;

class GetEventListQuery extends BasicQuery
{
    const string EVENT_REGION = 'region';
    const string EVENT_OBJECT = 'object';
    const string EVENT_UNIT = 'unit';
    const string EVENT_APARTMENT = 'apartment';
    const string EVENT_SERVICE = 'service';
    const string EVENT_SERVICE_GROUP = 'sgroup';
    const string EVENT_TOUR = 'tour';
    const string EVENT_TOUR_PACK = 'tourpack';
    const string EVENT_ROOM = 'room';
    const string EVENT_ORDER = 'order';
    const string EVENT_ORDER_DET = 'order_det';
    const string EVENT_ORDER_PAYMENT = 'order_payment';
    const string EVENT_APARTMENT_PRICE = 'aprice';
    const string EVENT_SERVICE_PRICE = 'sprice';
    const string EVENT_QUOTE = 'quote';
    const string EVENT_QUOTE_FREE = 'quote_free';
    const string EVENT_TOUR_STOP = 'tour_stop';
    const string EVENT_TOUR_ROUTE = 'tour_route';
    const string EVENT_ROOM_LOCK = 'room_lock';
    const string EVENT_ROOM_PLACE_LOCK = 'room_place_lock';

    protected string $url = "https://selena-online.ru/rest/v1/events/getlist";
    protected string $method = "GET";

    protected function bindParamsToUrl(): void
    {
        $params = array_intersect_key($this->payload, array_flip($this->bindingParams()));
        if (!empty($params)) {
            $lastKey = array_key_last($params);
            $query = "";
            foreach ($params as $key => $param) {
                $query .= "$key=$param";
                if ($key != $lastKey) {
                    $query .= "&";
                }
            }
            $this->url = $this->url . "?" . http_build_query($params);
        }
    }

    protected function bindingParams(): array
    {
        return [
            'from_eventtime',
            'from_eventid',
            'limit',
            'event',
            'objectid',
            'apartmentid',
            'tourid'
        ];
    }
}
