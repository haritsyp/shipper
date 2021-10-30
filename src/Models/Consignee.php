<?php

namespace Haritsyp\Shipper\Models;

class Consignee
{
    public $name;

    public $phone_number;

    /**
     * Consignee constructor.
     * @param $name
     * @param $phone_number
     */
    public function __construct($name, $phone_number)
    {
        $this->name = $name;
        $this->phone_number = $phone_number;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number): void
    {
        $this->phone_number = $phone_number;
    }
}
