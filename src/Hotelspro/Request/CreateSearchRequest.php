<?php

namespace Hotelspro\Request;

/**
 * Class CreateSearchRequest
 * @package Hotelspro\Request
 */
class CreateSearchRequest
{
    /**
     * @var string
     */
    private $destinationCode;

    /**
     * @var string
     */
    private $startDate;

    /**
     * @var string
     */
    private $endDate;

    /**
     * @return mixed
     */
    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    /**
     * @param mixed $destinationCode
     */
    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode = $destinationCode;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }
}
