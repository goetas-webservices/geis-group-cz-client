<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing ListOfShipmentsResponse
 */
class ListOfShipmentsResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfShipmentRequestArrayOfShipmentResponsepMtQ0fwNType $listOfShipmentsResult
     */
    private $listOfShipmentsResult = null;

    /**
     * Gets as listOfShipmentsResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfShipmentRequestArrayOfShipmentResponsepMtQ0fwNType
     */
    public function getListOfShipmentsResult()
    {
        return $this->listOfShipmentsResult;
    }

    /**
     * Sets a new listOfShipmentsResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfShipmentRequestArrayOfShipmentResponsepMtQ0fwNType $listOfShipmentsResult
     * @return self
     */
    public function setListOfShipmentsResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfShipmentRequestArrayOfShipmentResponsepMtQ0fwNType $listOfShipmentsResult)
    {
        $this->listOfShipmentsResult = $listOfShipmentsResult;
        return $this;
    }


}

