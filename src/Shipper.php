<?php

namespace Haritsyp\Shipper;

use Haritsyp\Shipper\Helpers\ApiRequester;

class Shipper
{
    //trait declaration
    use ApiRequester;

    /**
     * API KEY
     *
     * @var string
     */
    private $api_key;

    /**
     * BASE URL
     *
     * @var string
     */
    protected $base_url;

    /**
     * SHIPPER ENV
     *
     * @var boolean
     */
    protected $is_production;

    public function __construct()
    {
        $this->api_key = config('shipper.api_key');

        $this->base_url = config('shipper.base_url', 'https://merchant-api-sandbox.shipper.id');

        $this->is_production = config('shipper.is_production');

        if ($this->is_production) {
            $this->base_url = 'https://merchant-api.shipper.id';
        }
    }

    /**
     * @return string
     */
    protected function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * @param \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed $api_key
     */
    protected function setApiKey($api_key): void
    {
        $this->api_key = $api_key;
    }

    /**
     * @return string
     */
    protected function getBaseUrl()
    {
        return $this->base_url;
    }

    /**
     * @param string $base_url
     */
    protected function setBaseUrl(string $base_url): void
    {
        $this->base_url = $base_url;
    }

    /**
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    protected function getIsProduction()
    {
        return $this->is_production;
    }

    /**
     * @param \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed $is_production
     */
    protected function setIsProduction($is_production): void
    {
        $this->is_production = $is_production;
    }
}
