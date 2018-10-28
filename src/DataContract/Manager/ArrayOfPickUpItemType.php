<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ArrayOfPickUpItemType
 *
 *
 * XSD Type: ArrayOfPickUpItem
 */
class ArrayOfPickUpItemType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\PickUpItemType[] $pickUpItem
     */
    private $pickUpItem = [
        
    ];

    /**
     * Adds as pickUpItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\PickUpItemType $pickUpItem
     */
    public function addToPickUpItem(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\PickUpItemType $pickUpItem)
    {
        $this->pickUpItem[] = $pickUpItem;
        return $this;
    }

    /**
     * isset pickUpItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPickUpItem($index)
    {
        return isset($this->pickUpItem[$index]);
    }

    /**
     * unset pickUpItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPickUpItem($index)
    {
        unset($this->pickUpItem[$index]);
    }

    /**
     * Gets as pickUpItem
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\PickUpItemType[]
     */
    public function getPickUpItem()
    {
        return $this->pickUpItem;
    }

    /**
     * Sets a new pickUpItem
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\PickUpItemType[] $pickUpItem
     * @return self
     */
    public function setPickUpItem(array $pickUpItem)
    {
        $this->pickUpItem = $pickUpItem;
        return $this;
    }


}

