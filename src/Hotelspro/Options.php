<?php

namespace Hotelspro;

/**
 * Class Options
 * @package Hotelspro
 */
class Options
{
    /**
     * @var string
     */
    private $consumerKey;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     * @param string $consumerKey
     */
    public function setConsumerKey($consumerKey)
    {
        $this->consumerKey = $consumerKey;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }
}
