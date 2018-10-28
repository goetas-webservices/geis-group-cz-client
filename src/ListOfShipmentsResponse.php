<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing ListOfShipmentsResponse
 */
class ListOfShipmentsResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfShipmentRequestArrayOfShipmentResponsepMtQ0fwNType $listOfShipmentsResult
     */
    private $listOfShipmentsResult = null;

    /**
     * Gets as listOfShipmentsResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfShipmentRequestArrayOfShipmentResponsepMtQ0fwNType
     */
    public function getListOfShipmentsResult()
    {
        return $this->listOfShipmentsResult;
    }

    /**
     * Sets a new listOfShipmentsResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfShipmentRequestArrayOfShipmentResponsepMtQ0fwNType $listOfShipmentsResult
     * @return self
     */
    public function setListOfShipmentsResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfShipmentRequestArrayOfShipmentResponsepMtQ0fwNType $listOfShipmentsResult)
    {
        $this->listOfShipmentsResult = $listOfShipmentsResult;
        return $this;
    }


}

