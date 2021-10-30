<?php

namespace Haritsyp\Shipper\Tests\Unit;

use Haritsyp\Shipper\Repository\ShipperLocation;
use Haritsyp\Shipper\Tests\TestCase;

class ShipperLocationTest extends TestCase
{
    public function testGetCountry()
    {
        $shipper_location = new ShipperLocation();
        $countries = $shipper_location->getCountries();
        $this->assertNotEmpty($countries);
    }
}