<?php

namespace Haritsyp\Shipper\Repository;

use Haritsyp\Shipper\Shipper;

class ShipperPickup extends Shipper
{

    /**
     * @param $agent_id
     * @param $order_id
     * @param $pickup_time
     * @return object|mixed
     */
    public function create($agent_id, $order_id, $pickup_time)
    {
        return $this->post('v3/pickup', array_filter([
            'data' => [
                'order_activation' => [
                    'agent_id' => $agent_id,
                    'order_id' => [$order_id],
                    'pickup_time' => $pickup_time,
                ],
            ],
        ]));
    }

    /**
     * @param $order_id
     * @param $start_time
     * @param $end_time
     * @param $timezone
     * @return object|mixed
     */
    public function createWithTimeSlot($order_id, $start_time, $end_time, $timezone)
    {
        return $this->post('v3/pickup', array_filter([
            'data' => [
                'order_activation' => [
                    'order_id' => [$order_id],
                    'start_time' => $start_time,
                    'end_time' => $end_time,
                    'timezone' => $timezone,
                ],
            ],
        ]));
    }

    /**
     * @param string $timezone
     * @param null $request_time
     * @return object|mixed
     */
    public function getPickupTimeSlot(string $timezone = 'Asia/Jakarta', $request_time = null)
    {
        return $this->get('v3/pickup', array_filter([
            'time_zone' => $timezone,
            'request_time' => $request_time
        ]));
    }

    /**
     * @param string $pickup_code
     * @return object|mixed
     */
    public function cancel(string $pickup_code)
    {
        return $this->patch('v3/pickup', array_filter([
            'pickupCode' => $pickup_code
        ]));
    }

}