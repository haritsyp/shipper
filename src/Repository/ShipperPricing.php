<?php

namespace Haritsyp\Shipper\Repository;

use Haritsyp\Shipper\Shipper;

class ShipperPricing extends Shipper
{
    /**
     * Shipper Get Pricing Domestic
     *
     * @param int $origin
     * @param int $destination
     * @param int $length
     * @param int $width
     * @param int $height
     * @param float $weight
     * @param float $price
     * @return object
     */
    public function getPricingDomesticByArea(int $origin, int $destination, int $length, int $width, int $height, float $weight, float $price)
    {
        return $this->post('v3/pricing/domestic', array(
            'destination' =>
                array(
                    'area_id' => $destination,
                ),
            'origin' =>
                array(
                    'area_id' => $origin,
                ),
            'length' => $length,
            'width' => $width,
            'height' => $height,
            'weight' => $weight,
            'limit' => 100,
            'item_value' => $price,
        ));
    }
}
