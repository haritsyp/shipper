<?php

namespace Haritsyp\Shipper\Models;

class Courier
{
    public $cod;

    public $rate_id;

    public $use_insurance;

    /**
     * Courier constructor.
     * @param $cod
     * @param $rate_id
     * @param $use_insurance
     */
    public function __construct($cod, $rate_id, $use_insurance)
    {
        $this->cod = $cod;
        $this->rate_id = $rate_id;
        $this->use_insurance = $use_insurance;
    }

    /**
     * @return mixed
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * @param mixed $cod
     */
    public function setCod($cod): void
    {
        $this->cod = $cod;
    }

    /**
     * @return mixed
     */
    public function getRateId()
    {
        return $this->rate_id;
    }

    /**
     * @param mixed $rate_id
     */
    public function setRateId($rate_id): void
    {
        $this->rate_id = $rate_id;
    }

    /**
     * @return mixed
     */
    public function getUseInsurance()
    {
        return $this->use_insurance;
    }

    /**
     * @param mixed $use_insurance
     */
    public function setUseInsurance($use_insurance): void
    {
        $this->use_insurance = $use_insurance;
    }
}
