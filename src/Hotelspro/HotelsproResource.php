<?php

namespace Hotelspro;

/**
 * Class HotelsproResource
 * @package Hotelspro
 */
class HotelsproResource extends ApiResource
{
    const CLIENT_VERSION = '0.0.1';

    protected static function getHttpHeaders()
    {
        $header = array(
            "Accept: application/json",
            "Content-type: application/json",
        );

        array_push($header, "x-hotelspro-tour-client-version: "."tour-api-php-".self::CLIENT_VERSION);

        return $header;
    }
}
