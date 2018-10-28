<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing DeleteShipmentResponse
 */
class DeleteShipmentResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfDeleteShipmentRequestDeleteShipmentResponsepMtQ0fwNType $deleteShipmentResult
     */
    private $deleteShipmentResult = null;

    /**
     * Gets as deleteShipmentResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfDeleteShipmentRequestDeleteShipmentResponsepMtQ0fwNType
     */
    public function getDeleteShipmentResult()
    {
        return $this->deleteShipmentResult;
    }

    /**
     * Sets a new deleteShipmentResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfDeleteShipmentRequestDeleteShipmentResponsepMtQ0fwNType $deleteShipmentResult
     * @return self
     */
    public function setDeleteShipmentResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfDeleteShipmentRequestDeleteShipmentResponsepMtQ0fwNType $deleteShipmentResult)
    {
        $this->deleteShipmentResult = $deleteShipmentResult;
        return $this;
    }


}

