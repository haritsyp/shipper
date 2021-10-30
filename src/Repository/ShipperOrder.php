<?php

namespace Haritsyp\Shipper\Repository;

use Haritsyp\Shipper\Models\Order;
use Haritsyp\Shipper\Shipper;

class ShipperOrder extends Shipper
{
    private $order;

    public function create()
    {
        $order = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', json_encode($this->order));

        return $this->post('v3/order', json_decode($order, true));
    }

    /**
     * @param $order_id
     * @return object|mixed
     */
    public function getOrderDetail($order_id)
    {
        return $this->get('v3/order/' . $order_id, []);
    }

    /**
     * @param $status_id
     * @return object|mixed
     */
    public function getOrderTrackingStatus($status_id)
    {
        return $this->get('v3/order/status' . $status_id, []);
    }

    /**
     * @param null $sort_by
     * @param null $page
     * @param null $limit
     * @param null $date_start
     * @param null $date_end
     * @param null $order_status_id
     * @return object|mixed
     */
    public function getAvailableOrder($page = null, $limit = null, $sort_by = null, $date_start = null, $date_end = null, $order_status_id = null)
    {
        return $this->get('v3/order', array_filter([
            'page' => $page,
            'limit' => $limit,
            'sort_by' => $sort_by,
            'date_start' => $date_start,
            'date_end' => $date_end,
            'order_status_id' => $order_status_id,
        ]));
    }

    /**
     * @param string $order_id
     * @return object|mixed
     */
    public function update(string $order_id)
    {
        $order = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', json_encode($this->order));

        return $this->put('v3/order/' . $order_id, json_decode($order, true));
    }

    /**
     * @param string $order_id
     * @param null|string $reason
     * @return object|mixed
     */
    public function cancel(string $order_id, $reason = null)
    {
        return $this->delete('v3/order/' . $order_id, array_filter([
            'reason' => $reason
        ]));
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }


}
