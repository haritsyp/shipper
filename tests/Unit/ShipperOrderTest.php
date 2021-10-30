<?php

namespace Haritsyp\Shipper\Tests\Unit;

use Haritsyp\Shipper\Repository\ShipperOrder;
use Haritsyp\Shipper\Tests\TestCase;

class ShipperOrderTest extends TestCase
{
    public function testGetOrderDetail()
    {
        $shipper_order = new ShipperOrder();
        $shipper_order_detail = $shipper_order->getOrderDetail('21A810988510');
        $this->assertNotEmpty($shipper_order_detail);
    }

    public function testGetOrderTackingStatus()
    {
        $shipper_order = new ShipperOrder();
        $shipper_order_detail = $shipper_order->getOrderTrackingStatus('1000');
        $this->assertNotEmpty($shipper_order_detail);
    }

    public function testGetOrder()
    {
        $shipper_order = new ShipperOrder();
        $shipper_order = $shipper_order->getAvailableOrder();
        $this->assertNotEmpty($shipper_order);
    }
}