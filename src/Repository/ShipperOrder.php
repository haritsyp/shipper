<?php

namespace Haritsyp\Shipper\Repository;

use Haritsyp\Shipper\Models\Order;
use Haritsyp\Shipper\Shipper;

class ShipperOrder extends Shipper
{
    private $order;

    /**
     * ShipperOrder constructor.
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
        parent::__construct();
    }

    public function create()
    {
        $order = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', json_encode($this->order));

        $this->post('v3/order', json_decode($order, true));
    }
}
