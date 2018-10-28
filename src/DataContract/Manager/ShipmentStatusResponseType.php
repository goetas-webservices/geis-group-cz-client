<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ShipmentStatusResponseType
 *
 *
 * XSD Type: ShipmentStatusResponse
 */
class ShipmentStatusResponseType
{

    /**
     * @property string $shipmentNumber
     */
    private $shipmentNumber = null;

    /**
     * @property string $statusCode
     */
    private $statusCode = null;

    /**
     * @property string $statusName
     */
    private $statusName = null;

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

    /**
     * Gets as statusCode
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Gets as statusName
     *
     * @return string
     */
    public function getStatusName()
    {
        return $this->statusName;
    }

    /**
     * Sets a new statusName
     *
     * @param string $statusName
     * @return self
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;
        return $this;
    }


}

