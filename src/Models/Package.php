<?php

namespace Haritsyp\Shipper\Models;

class Package
{
    public $height;

    public $items;

    public $length;

    public $package_type;

    public $price;

    public $weight;

    public $width;

    /**
     * Package constructor.
     * @param array $items
     * @param $height
     * @param $length
     * @param $weight
     * @param $width
     */
    public function __construct(array $items, $height, $length, $weight, $width, $price, $package_type)
    {
        $this->items = $items;
        $this->height = $height;
        $this->length = $length;
        $this->weight = $weight;
        $this->width = $width;
        $this->price = $price;
        $this->package_type = $package_type;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    /**
     * @return Items
     */
    public function getItems(): Items
    {
        return $this->items;
    }

    /**
     * @param Items $items
     */
    public function setItems(Items $items): void
    {
        $this->items = $items;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length): void
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getPackageType()
    {
        return $this->package_type;
    }

    /**
     * @param mixed $package_type
     */
    public function setPackageType($package_type): void
    {
        $this->package_type = $package_type;
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
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }
}
