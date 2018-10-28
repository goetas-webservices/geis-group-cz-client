<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing DeleteShipmentRequestType
 *
 *
 * XSD Type: DeleteShipmentRequest
 */
class DeleteShipmentRequestType extends RequestObjectBaseType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\DeleteShipmentItemType[] $shipmentsNumbers
     */
    private $shipmentsNumbers = null;

    /**
     * Adds as deleteShipmentItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\DeleteShipmentItemType $deleteShipmentItem
     */
    public function addToShipmentsNumbers(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\DeleteShipmentItemType $deleteShipmentItem)
    {
        $this->shipmentsNumbers[] = $deleteShipmentItem;
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
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\DeleteShipmentItemType[]
     */
    public function getShipmentsNumbers()
    {
        return $this->shipmentsNumbers;
    }

    /**
     * Sets a new shipmentsNumbers
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\DeleteShipmentItemType[] $shipmentsNumbers
     * @return self
     */
    public function setShipmentsNumbers(array $shipmentsNumbers)
    {
        $this->shipmentsNumbers = $shipmentsNumbers;
        return $this;
    }


}

