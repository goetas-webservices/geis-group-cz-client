<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ShipmentStatusItemType
 *
 *
 * XSD Type: ShipmentStatusItem
 */
class ShipmentStatusItemType
{

    /**
     * @property string $shipmentNumber
     */
    private $shipmentNumber = null;

    /**
     * Gets as shipmentNumber
     *
     * @return string
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }

    /**
     * Sets a new shipmentNumber
     *
     * @param string $shipmentNumber
     * @return self
     */
    public function setShipmentNumber($shipmentNumber)
    {
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }


}

