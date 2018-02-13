<?php

namespace Hotelspro;

/**
 * Interface HttpClientInterface
 * @package Hotelspro
 */
interface HttpClientInterface
{
    public function get($url);

    public function post($url, $header, $content);

    public function put($url, $header, $content);

    public function delete($url, $header, $content = null);
}
