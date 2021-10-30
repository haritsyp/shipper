<?php

namespace Haritsyp\Shipper\Tests;

use Illuminate\Support\Facades\Config;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        Config::set('shipper.api_key', env('SHIPPER_API_KEY'));
        Config::set('shipper.country_id', 228);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}