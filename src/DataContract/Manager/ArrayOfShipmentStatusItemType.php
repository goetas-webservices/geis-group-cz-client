<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ArrayOfShipmentStatusItemType
 *
 *
 * XSD Type: ArrayOfShipmentStatusItem
 */
class ArrayOfShipmentStatusItemType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusItemType[] $shipmentStatusItem
     */
    private $shipmentStatusItem = [
        
    ];

    /**
     * Adds as shipmentStatusItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusItemType $shipmentStatusItem
     */
    public function addToShipmentStatusItem(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusItemType $shipmentStatusItem)
    {
        $this->shipmentStatusItem[] = $shipmentStatusItem;
        return $this;
    }

    /**
     * isset shipmentStatusItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentStatusItem($index)
    {
        return isset($this->shipmentStatusItem[$index]);
    }

    /**
     * unset shipmentStatusItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentStatusItem($index)
    {
        unset($this->shipmentStatusItem[$index]);
    }

    /**
     * Gets as shipmentStatusItem
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusItemType[]
     */
    public function getShipmentStatusItem()
    {
        return $this->shipmentStatusItem;
    }

    /**
     * Sets a new shipmentStatusItem
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusItemType[] $shipmentStatusItem
     * @return self
     */
    public function setShipmentStatusItem(array $shipmentStatusItem)
    {
        $this->shipmentStatusItem = $shipmentStatusItem;
        return $this;
    }


}

