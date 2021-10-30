<?php

namespace Haritsyp\Shipper\Models\Callback;

class CallbackStatus
{
    private $id;

    private $name;

    private $description;

    /**
     * CallbackStatus constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
}