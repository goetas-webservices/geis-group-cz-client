<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing DeleteShipmentResponse
 */
class DeleteShipmentResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfDeleteShipmentRequestDeleteShipmentResponsepMtQ0fwNType $deleteShipmentResult
     */
    private $deleteShipmentResult = null;

    /**
     * Gets as deleteShipmentResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfDeleteShipmentRequestDeleteShipmentResponsepMtQ0fwNType
     */
    public function getDeleteShipmentResult()
    {
        return $this->deleteShipmentResult;
    }

    /**
     * Sets a new deleteShipmentResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfDeleteShipmentRequestDeleteShipmentResponsepMtQ0fwNType $deleteShipmentResult
     * @return self
     */
    public function setDeleteShipmentResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfDeleteShipmentRequestDeleteShipmentResponsepMtQ0fwNType $deleteShipmentResult)
    {
        $this->deleteShipmentResult = $deleteShipmentResult;
        return $this;
    }


}

