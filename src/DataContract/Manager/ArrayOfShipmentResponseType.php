<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfShipmentResponseType
 *
 *
 * XSD Type: ArrayOfShipmentResponse
 */
class ArrayOfShipmentResponseType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentResponseType[] $shipmentResponse
     */
    private $shipmentResponse = [
        
    ];

    /**
     * Adds as shipmentResponse
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentResponseType $shipmentResponse
     */
    public function addToShipmentResponse(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentResponseType $shipmentResponse)
    {
        $this->shipmentResponse[] = $shipmentResponse;
        return $this;
    }

    /**
     * isset shipmentResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentResponse($index)
    {
        return isset($this->shipmentResponse[$index]);
    }

    /**
     * unset shipmentResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentResponse($index)
    {
        unset($this->shipmentResponse[$index]);
    }

    /**
     * Gets as shipmentResponse
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentResponseType[]
     */
    public function getShipmentResponse()
    {
        return $this->shipmentResponse;
    }

    /**
     * Sets a new shipmentResponse
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentResponseType[] $shipmentResponse
     * @return self
     */
    public function setShipmentResponse(array $shipmentResponse)
    {
        $this->shipmentResponse = $shipmentResponse;
        return $this;
    }


}

