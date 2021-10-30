<?php

namespace Haritsyp\Shipper\Models;

class Items
{
    public $id;

    public $name;

    public $price;

    public $qty;

    /**
     * Items constructor.
     * @param $name
     * @param $price
     * @param $qty
     */
    public function __construct($name, $price, $qty)
    {
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty): void
    {
        $this->qty = $qty;
    }
}
