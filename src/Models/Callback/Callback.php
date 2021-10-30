<?php

namespace Haritsyp\Shipper\Models\Callback;

class Callback
{
    private $auth;

    private $order_id;

    private $tracking_id;

    private $order_tracking_id;

    private $external_id;

    private $status_date;

    private $internal;

    private $external;

    private $internal_status;

    private $external_status;

    private $awb;

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
     * @return mixed
     */
    public function getInternal()
    {
        return $this->internal;
    }

    /**
     * @return mixed
     */
    public function getExternal()
    {
        return $this->external;
    }

    /**
     * @return mixed
     */
    public function getInternalStatus()
    {
        return $this->internal_status;
    }

    /**
     * @return mixed
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
