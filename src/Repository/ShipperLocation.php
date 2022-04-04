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
     * Shipper Get Location by Keyword.
     *
     * @param null $adm_level
     *
     * @return object
     */
    public function getLocation(string $keyword, $adm_level = null)
    {
        return $this->get('v3/location', array_filter([
            'keyword' => $keyword,
            'adm_level' => $adm_level,
        ]));
    }

    /**
     * Shipper Get Provinces.
     *
     * @return object
     */
    public function getCountries(int $country_id = null)
    {
        return $this->get('v3/location/countries', ['country_id' => $country_id ?? config('shipper.country_id')]);
    }

    /**
     * Shipper Get Provinces.
     *
     * @param array $params
     *
     * @return object
     */
    public function getProvinces(int $country_id = null, $params = [])
    {
        $params['country_id'] = $country_id ?? config('shipper.country_id');

        return $this->get('v3/location/provinces', $params);
    }

    /**
     * Shipper Get Cities.
     *
     * @param array $params
     *
     * @return object
     */
    public function getCitiesByProvince(int $province_id, $params = [])
    {
        return $this->get("v3/location/province/$province_id/cities", $params);
    }

    /**
     * Shipper Get Suburbs.
     *
     * @param array $params
     *
     * @return object
     */
    public function getSuburbsByCity(int $city_id, $params = [])
    {
        return $this->get("v3/location/city/$city_id/suburbs", $params);
    }

    /**
     * Shipper Get Area.
     *
     * @param array $params
     *
     * @return object
     */
    public function getAreasBySuburb(int $suburb, $params = [])
    {
        return $this->get("v3/location/suburb/$suburb/areas", $params);
    }

    /**
     * Shipper Get Area.
     *
     * @param array $params
     *
     * @return object
     */
    public function getAreasByArea(int $area, $params = [])
    {
        return $this->get("v3/location/area/$area", $params);
    }
}
