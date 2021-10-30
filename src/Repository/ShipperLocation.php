<?php

namespace Haritsyp\Shipper\Repository;

use Haritsyp\Shipper\Shipper;

class ShipperLocation extends Shipper
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Shipper Get Provinces
     *
     * @param int|null $country_id
     * @return object
     */
    public function getCountries(int $country_id = null)
    {
        return $this->get('v3/location/countries', ['country_id' => $country_id ?? config('shipper.country_id')]);
    }

    /**
     * Shipper Get Provinces
     *
     * @param int|null $country_id
     * @return object
     */
    public function getProvinces(int $country_id = null)
    {
        return $this->get('v3/location/provinces', ['country_id' => $country_id ?? config('shipper.country_id')]);
    }

    /**
     * Shipper Get Cities
     *
     * @param int $province_id
     * @return object
     */
    public function getCitiesByProvince(int $province_id)
    {
        return $this->get("v3/location/province/$province_id/cities", []);
    }

    /**
     * Shipper Get Suburbs
     *
     * @param int $city_id
     * @return object
     */
    public function getSuburbsByCity(int $city_id)
    {
        return $this->get("v3/location/city/$city_id/suburbs", []);
    }

    /**
     * Shipper Get Area
     *
     * @param int $suburb
     * @return object
     */
    public function getAreasBySuburb(int $suburb)
    {
        return $this->get("v3/location/suburb/$suburb/areas", []);
    }
}
