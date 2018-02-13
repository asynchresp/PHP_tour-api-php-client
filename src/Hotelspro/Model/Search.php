<?php

namespace Hotelspro\Model;

use Hotelspro\HotelsproResource;
use Hotelspro\Options;
use Hotelspro\Request\CreateSearchRequest;

/**
 * Class Search
 * @package Hotelspro\Model
 */
class Search extends HotelsproResource
{
    public static function create(CreateSearchRequest $request, Options $options)
    {
        $rawResult = parent::httpClient()->post($options->getBaseUrl() . '/products/search', parent::getHttpHeaders(), $request);

        return $rawResult;
    }
}
