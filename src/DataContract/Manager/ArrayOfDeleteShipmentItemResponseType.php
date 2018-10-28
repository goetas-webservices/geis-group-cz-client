<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfDeleteShipmentItemResponseType
 *
 *
 * XSD Type: ArrayOfDeleteShipmentItemResponse
 */
class ArrayOfDeleteShipmentItemResponseType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\DeleteShipmentItemResponseType[] $deleteShipmentItemResponse
     */
    private $deleteShipmentItemResponse = [
        
    ];

    /**
     * Adds as deleteShipmentItemResponse
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\DeleteShipmentItemResponseType $deleteShipmentItemResponse
     */
    public function addToDeleteShipmentItemResponse(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\DeleteShipmentItemResponseType $deleteShipmentItemResponse)
    {
        $this->deleteShipmentItemResponse[] = $deleteShipmentItemResponse;
        return $this;
    }

    /**
     * isset deleteShipmentItemResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeleteShipmentItemResponse($index)
    {
        return isset($this->deleteShipmentItemResponse[$index]);
    }

    /**
     * unset deleteShipmentItemResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeleteShipmentItemResponse($index)
    {
        unset($this->deleteShipmentItemResponse[$index]);
    }

    /**
     * Gets as deleteShipmentItemResponse
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\DeleteShipmentItemResponseType[]
     */
    public function getDeleteShipmentItemResponse()
    {
        return $this->deleteShipmentItemResponse;
    }

    /**
     * Sets a new deleteShipmentItemResponse
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\DeleteShipmentItemResponseType[] $deleteShipmentItemResponse
     * @return self
     */
    public function setDeleteShipmentItemResponse(array $deleteShipmentItemResponse)
    {
        $this->deleteShipmentItemResponse = $deleteShipmentItemResponse;
        return $this;
    }


}

