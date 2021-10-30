<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Haritsyp\Shipper
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | Shipper Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */
    'is_production' => env('SHIPPER_IS_PRODUCTION', false),

    /*
    |--------------------------------------------------------------------------
    | Shipper Base URL
    |--------------------------------------------------------------------------
    |
    | This value determines the "base url" for shipper API
    |
    */
    'base_url' => env('SHIPPER_BASE_URL', 'https://merchant-api-sandbox.shipper.id/'),

    /*
    |--------------------------------------------------------------------------
    | Shipper API KEY
    |--------------------------------------------------------------------------
    |
    | This value determines the "api_key" for shipper API
    |
    */
    'api_key' => env('SHIPPER_API_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Shipper API KEY
    |--------------------------------------------------------------------------
    |
    | This value determines the "api_key" for shipper API
    |
    */
    'country_id' => env('SHIPPER_COUNTRY_ID', '228'),

];
