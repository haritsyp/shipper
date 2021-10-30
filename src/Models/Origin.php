<?php

namespace Haritsyp\Shipper\Models;

class Origin{

    public $address;

    public $area_id;

    public $area_name;

    public $city_id;

    public $city_name;

    public $country_id;

    public $country_name;

    public $direction;

    public $lat;

    public $lng;

    public $postcode;

    public $province_id;

    public $province_name;

    public $suburb_id;

    public $suburb_name;

    /**
     * Origin constructor.
     * @param $address
     * @param $area_id
     */
    public function __construct($address, $area_id)
    {
        $this->address = $address;
        $this->area_id = $area_id;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAreaId()
    {
        return $this->area_id;
    }

    /**
     * @param mixed $area_id
     */
    public function setAreaId($area_id): void
    {
        $this->area_id = $area_id;
    }

    /**
     * @return mixed
     */
    public function getAreaName()
    {
        return $this->area_name;
    }

    /**
     * @param mixed $area_name
     */
    public function setAreaName($area_name): void
    {
        $this->area_name = $area_name;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * @param mixed $city_id
     */
    public function setCityId($city_id): void
    {
        $this->city_id = $city_id;
    }

    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->city_name;
    }

    /**
     * @param mixed $city_name
     */
    public function setCityName($city_name): void
    {
        $this->city_name = $city_name;
    }

    /**
     * @return mixed
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * @param mixed $country_id
     */
    public function setCountryId($country_id): void
    {
        $this->country_id = $country_id;
    }

    /**
     * @return mixed
     */
    public function getCountryName()
    {
        return $this->country_name;
    }

    /**
     * @param mixed $country_name
     */
    public function setCountryName($country_name): void
    {
        $this->country_name = $country_name;
    }

    /**
     * @return mixed
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param mixed $direction
     */
    public function setDirection($direction): void
    {
        $this->direction = $direction;
    }

    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param mixed $lat
     */
    public function setLat($lat): void
    {
        $this->lat = $lat;
    }

    /**
     * @return mixed
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param mixed $lng
     */
    public function setLng($lng): void
    {
        $this->lng = $lng;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getProvinceId()
    {
        return $this->province_id;
    }

    /**
     * @param mixed $province_id
     */
    public function setProvinceId($province_id): void
    {
        $this->province_id = $province_id;
    }

    /**
     * @return mixed
     */
    public function getProvinceName()
    {
        return $this->province_name;
    }

    /**
     * @param mixed $province_name
     */
    public function setProvinceName($province_name): void
    {
        $this->province_name = $province_name;
    }

    /**
     * @return mixed
     */
    public function getSuburbId()
    {
        return $this->suburb_id;
    }

    /**
     * @param mixed $suburb_id
     */
    public function setSuburbId($suburb_id): void
    {
        $this->suburb_id = $suburb_id;
    }

    /**
     * @return mixed
     */
    public function getSuburbName()
    {
        return $this->suburb_name;
    }

    /**
     * @param mixed $suburb_name
     */
    public function setSuburbName($suburb_name): void
    {
        $this->suburb_name = $suburb_name;
    }
}
