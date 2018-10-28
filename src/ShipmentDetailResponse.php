<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing ShipmentDetailResponse
 */
class ShipmentDetailResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfShipmentReqeustShipmentpMtQ0fwNType $shipmentDetailResult
     */
    private $shipmentDetailResult = null;

    /**
     * Gets as shipmentDetailResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfShipmentReqeustShipmentpMtQ0fwNType
     */
    public function getShipmentDetailResult()
    {
        return $this->shipmentDetailResult;
    }

    /**
     * Sets a new shipmentDetailResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfShipmentReqeustShipmentpMtQ0fwNType $shipmentDetailResult
     * @return self
     */
    public function setShipmentDetailResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfShipmentReqeustShipmentpMtQ0fwNType $shipmentDetailResult)
    {
        $this->shipmentDetailResult = $shipmentDetailResult;
        return $this;
    }


}

