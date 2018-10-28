<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing DeleteShipmentResponseType
 *
 *
 * XSD Type: DeleteShipmentResponse
 */
class DeleteShipmentResponseType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\DeleteShipmentItemResponseType[] $shipmentsNumbers
     */
    private $shipmentsNumbers = null;

    /**
     * Adds as deleteShipmentItemResponse
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\DeleteShipmentItemResponseType $deleteShipmentItemResponse
     */
    public function addToShipmentsNumbers(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\DeleteShipmentItemResponseType $deleteShipmentItemResponse)
    {
        $this->shipmentsNumbers[] = $deleteShipmentItemResponse;
        return $this;
    }

    /**
     * isset shipmentsNumbers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentsNumbers($index)
    {
        return isset($this->shipmentsNumbers[$index]);
    }

    /**
     * unset shipmentsNumbers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentsNumbers($index)
    {
        unset($this->shipmentsNumbers[$index]);
    }

    /**
     * Gets as shipmentsNumbers
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\DeleteShipmentItemResponseType[]
     */
    public function getShipmentsNumbers()
    {
        return $this->shipmentsNumbers;
    }

    /**
     * Sets a new shipmentsNumbers
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\DeleteShipmentItemResponseType[] $shipmentsNumbers
     * @return self
     */
    public function setShipmentsNumbers(array $shipmentsNumbers)
    {
        $this->shipmentsNumbers = $shipmentsNumbers;
        return $this;
    }


}

