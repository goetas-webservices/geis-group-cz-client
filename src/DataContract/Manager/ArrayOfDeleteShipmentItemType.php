<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ArrayOfDeleteShipmentItemType
 *
 *
 * XSD Type: ArrayOfDeleteShipmentItem
 */
class ArrayOfDeleteShipmentItemType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\DeleteShipmentItemType[] $deleteShipmentItem
     */
    private $deleteShipmentItem = [
        
    ];

    /**
     * Adds as deleteShipmentItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\DeleteShipmentItemType $deleteShipmentItem
     */
    public function addToDeleteShipmentItem(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\DeleteShipmentItemType $deleteShipmentItem)
    {
        $this->deleteShipmentItem[] = $deleteShipmentItem;
        return $this;
    }

    /**
     * isset deleteShipmentItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeleteShipmentItem($index)
    {
        return isset($this->deleteShipmentItem[$index]);
    }

    /**
     * unset deleteShipmentItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeleteShipmentItem($index)
    {
        unset($this->deleteShipmentItem[$index]);
    }

    /**
     * Gets as deleteShipmentItem
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\DeleteShipmentItemType[]
     */
    public function getDeleteShipmentItem()
    {
        return $this->deleteShipmentItem;
    }

    /**
     * Sets a new deleteShipmentItem
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\DeleteShipmentItemType[] $deleteShipmentItem
     * @return self
     */
    public function setDeleteShipmentItem(array $deleteShipmentItem)
    {
        $this->deleteShipmentItem = $deleteShipmentItem;
        return $this;
    }


}

