<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ShipmentResponseType
 *
 *
 * XSD Type: ShipmentResponse
 */
class ShipmentResponseType
{

    /**
     * @property bool $isOrder
     */
    private $isOrder = null;

    /**
     * @property string $shipmentNumber
     */
    private $shipmentNumber = null;

    /**
     * Gets as isOrder
     *
     * @return bool
     */
    public function getIsOrder()
    {
        return $this->isOrder;
    }

    /**
     * Sets a new isOrder
     *
     * @param bool $isOrder
     * @return self
     */
    public function setIsOrder($isOrder)
    {
        $this->isOrder = $isOrder;
        return $this;
    }

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

