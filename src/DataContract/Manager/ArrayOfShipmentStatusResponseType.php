<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfShipmentStatusResponseType
 *
 *
 * XSD Type: ArrayOfShipmentStatusResponse
 */
class ArrayOfShipmentStatusResponseType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentStatusResponseType[] $shipmentStatusResponse
     */
    private $shipmentStatusResponse = [
        
    ];

    /**
     * Adds as shipmentStatusResponse
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentStatusResponseType $shipmentStatusResponse
     */
    public function addToShipmentStatusResponse(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentStatusResponseType $shipmentStatusResponse)
    {
        $this->shipmentStatusResponse[] = $shipmentStatusResponse;
        return $this;
    }

    /**
     * isset shipmentStatusResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentStatusResponse($index)
    {
        return isset($this->shipmentStatusResponse[$index]);
    }

    /**
     * unset shipmentStatusResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentStatusResponse($index)
    {
        unset($this->shipmentStatusResponse[$index]);
    }

    /**
     * Gets as shipmentStatusResponse
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentStatusResponseType[]
     */
    public function getShipmentStatusResponse()
    {
        return $this->shipmentStatusResponse;
    }

    /**
     * Sets a new shipmentStatusResponse
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentStatusResponseType[] $shipmentStatusResponse
     * @return self
     */
    public function setShipmentStatusResponse(array $shipmentStatusResponse)
    {
        $this->shipmentStatusResponse = $shipmentStatusResponse;
        return $this;
    }


}

