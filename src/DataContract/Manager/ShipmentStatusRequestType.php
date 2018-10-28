<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ShipmentStatusRequestType
 *
 *
 * XSD Type: ShipmentStatusRequest
 */
class ShipmentStatusRequestType extends RequestObjectBaseType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusItemType[] $shipmentsNumbers
     */
    private $shipmentsNumbers = null;

    /**
     * Adds as shipmentStatusItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusItemType $shipmentStatusItem
     */
    public function addToShipmentsNumbers(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusItemType $shipmentStatusItem)
    {
        $this->shipmentsNumbers[] = $shipmentStatusItem;
        return $this;
    }

    /**
     * isset shipmentsNumbers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentsNumbers($index)
    {
        return isset($this->shipmentsNumbers[$index]);
    }

    /**
     * unset shipmentsNumbers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentsNumbers($index)
    {
        unset($this->shipmentsNumbers[$index]);
    }

    /**
     * Gets as shipmentsNumbers
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusItemType[]
     */
    public function getShipmentsNumbers()
    {
        return $this->shipmentsNumbers;
    }

    /**
     * Sets a new shipmentsNumbers
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusItemType[] $shipmentsNumbers
     * @return self
     */
    public function setShipmentsNumbers(array $shipmentsNumbers)
    {
        $this->shipmentsNumbers = $shipmentsNumbers;
        return $this;
    }


}

