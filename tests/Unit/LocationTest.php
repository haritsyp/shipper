<?php

namespace Haritsyp\Shipper\Tests\Unit;

use Haritsyp\Shipper\Repository\ShipperLocation;
use Haritsyp\Shipper\Shipper;
use Haritsyp\Shipper\Tests\TestCase;

class LocationTest extends TestCase
{
    public function testShipperEnv()
    {
        $shipper = new Shipper();
        $this->assertEquals(env('SHIPPER_API_KEY'), $shipper->getApiKey());
        $this->assertEquals('https://merchant-api-sandbox.shipper.id/', $shipper->getBaseUrl());
    }

    public function testGetCountry()
    {
        $shipper_location = new ShipperLocation();
        $countries = $shipper_location->getCountries();
        $this->assertNotEmpty($countries);
    }
}