<?php

namespace Haritsyp\Shipper\Models\Callback;

class Callback
{
    public $auth;

    public $order_id;

    public $tracking_id;

    public $order_tracking_id;

    public $external_id;

    public $status_date;

    public $internal;

    public $external;

    public $internal_status;

    public $external_status;

    public $awb;

    public function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }

    /**
     * @return mixed
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @return mixed
     */
    public function getTrackingId()
    {
        return $this->tracking_id;
    }

    /**
     * @return mixed
     */
    public function getOrderTrackingId()
    {
        return $this->order_tracking_id;
    }

    /**
     * @return mixed
     */
    public function getExternalId()
    {
        return $this->external_id;
    }

    /**
     * @return mixed
     */
    public function getStatusDate()
    {
        return $this->status_date;
    }

    /**
     * @return CallbackStatus
     */
    public function getInternal()
    {
        return $this->internal;
    }

    /**
     * @return CallbackStatus
     */
    public function getExternal()
    {
        return $this->external;
    }

    /**
     * @return CallbackStatus
     */
    public function getInternalStatus()
    {
        return $this->internal_status;
    }

    /**
     * @return CallbackStatus
     */
    public function getExternalStatus()
    {
        return $this->external_status;
    }

    /**
     * @return mixed
     */
    public function getAwb()
    {
        return $this->awb;
    }
}
