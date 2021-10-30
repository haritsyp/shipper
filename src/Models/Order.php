<?php

namespace Haritsyp\Shipper\Models;

class Order
{
    const PAYMENT_TYPE_POSTPAY = 'postpay';

    const PAYMENT_TYPE_CASH = 'cash';

    const PAYMENT_TYPE = [
        self::PAYMENT_TYPE_POSTPAY => 'postpay',
        self::PAYMENT_TYPE_CASH => 'cash',
    ];

    const COVERAGE_DOMESTIC = 'domestic';

    const COVERAGE_INTERNATIONAL = 'international';

    const COVERAGE_DOMESTIC_INTERNAL = 'domestic/international';

    const COVERAGE = [
        self::COVERAGE_DOMESTIC => 'domestic',
        self::COVERAGE_INTERNATIONAL => 'international',
        self::COVERAGE_DOMESTIC_INTERNAL => 'domestic/international',
    ];

    public $base_prices;

    public $consignee;

    public $consigner;

    public $courier;

    public $coverage;

    public $destination;

    public $origin;

    public $external_id;

    public $package;

    public $payment_type;

    public $service_type;

    /**
     * Order constructor.
     * @param string $external_id
     * @param Consignee $consignee
     * @param Consigner $consigner
     * @param Courier $courier
     * @param Destination $destination
     * @param Origin $origin
     * @param Package $package
     */
    public function __construct(
        string $external_id,
        Consignee $consignee,
        Consigner $consigner,
        Courier $courier,
        Destination $destination,
        Origin $origin,
        Package $package)
    {
        $this->consignee = $consignee;
        $this->consigner = $consigner;
        $this->courier = $courier;
        $this->destination = $destination;
        $this->origin = $origin;
        $this->external_id = $external_id;
        $this->package = $package;
        $this->coverage = self::COVERAGE_DOMESTIC;
        $this->payment_type = self::PAYMENT_TYPE_POSTPAY;
    }

    public function getData()
    {
        return [
            'best_prices' => $this->isBasePrices(),
            'consignee' => $this->getConsignee(),
            'consigner' => $this->getConsigner(),
            'courier' => $this->getCourier(),
            'coverage' => $this->getCoverage(),
            'destination' => $this->getDestination(),
            'external_id' => $this->getExternalId(),
            'origin' => $this->getOrigin(),
            'package' => $this->getPackage(),
            'payment_type' => $this->getPaymentType(),
            'service_type' => $this->getServiceType(),
        ];
    }

    /**
     * @return bool
     */
    public function isBasePrices(): bool
    {
        return $this->base_prices ?? false;
    }

    /**
     * @param bool $base_prices
     */
    public function setBasePrices(bool $base_prices): void
    {
        $this->base_prices = $base_prices;
    }

    /**
     * @return Consignee
     */
    public function getConsignee(): Consignee
    {
        return $this->consignee;
    }

    /**
     * @param Consignee $consignee
     */
    public function setConsignee(Consignee $consignee): void
    {
        $this->consignee = $consignee;
    }

    /**
     * @return Consigner
     */
    public function getConsigner(): Consigner
    {
        return $this->consigner;
    }

    /**
     * @param Consigner $consigner
     */
    public function setConsigner(Consigner $consigner): void
    {
        $this->consigner = $consigner;
    }

    /**
     * @return Courier
     */
    public function getCourier(): Courier
    {
        return $this->courier;
    }

    /**
     * @param Courier $courier
     */
    public function setCourier(Courier $courier): void
    {
        $this->courier = $courier;
    }

    /**
     * @return string
     */
    public function getCoverage(): string
    {
        return $this->coverage;
    }

    /**
     * @param string $coverage
     */
    public function setCoverage(string $coverage): void
    {
        $this->coverage = $coverage;
    }

    /**
     * @return Destination
     */
    public function getDestination(): Destination
    {
        return $this->destination;
    }

    /**
     * @param Destination $destination
     */
    public function setDestination(Destination $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * @return Origin
     */
    public function getOrigin(): Origin
    {
        return $this->origin;
    }

    /**
     * @param Origin $origin
     */
    public function setOrigin(Origin $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->external_id;
    }

    /**
     * @param string $external_id
     */
    public function setExternalId(string $external_id): void
    {
        $this->external_id = $external_id;
    }

    /**
     * @return Package
     */
    public function getPackage(): Package
    {
        return $this->package;
    }

    /**
     * @param Package $package
     */
    public function setPackage(Package $package): void
    {
        $this->package = $package;
    }

    /**
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->payment_type;
    }

    /**
     * @param string $payment_type
     */
    public function setPaymentType(string $payment_type): void
    {
        $this->payment_type = $payment_type;
    }

    /**
     * @return mixed
     */
    public function getServiceType()
    {
        return $this->service_type;
    }

    /**
     * @param mixed $service_type
     */
    public function setServiceType($service_type): void
    {
        $this->service_type = $service_type;
    }
}
