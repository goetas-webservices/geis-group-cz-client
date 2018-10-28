<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing ShipmentStatusResponse
 */
class ShipmentStatusResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfShipmentStatusRequestArrayOfShipmentStatusResponsepMtQ0fwNType $shipmentStatusResult
     */
    private $shipmentStatusResult = null;

    /**
     * Gets as shipmentStatusResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfShipmentStatusRequestArrayOfShipmentStatusResponsepMtQ0fwNType
     */
    public function getShipmentStatusResult()
    {
        return $this->shipmentStatusResult;
    }

    /**
     * Sets a new shipmentStatusResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfShipmentStatusRequestArrayOfShipmentStatusResponsepMtQ0fwNType $shipmentStatusResult
     * @return self
     */
    public function setShipmentStatusResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfShipmentStatusRequestArrayOfShipmentStatusResponsepMtQ0fwNType $shipmentStatusResult)
    {
        $this->shipmentStatusResult = $shipmentStatusResult;
        return $this;
    }


}

