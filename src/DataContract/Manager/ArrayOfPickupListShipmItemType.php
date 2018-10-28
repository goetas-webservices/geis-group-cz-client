<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfPickupListShipmItemType
 *
 *
 * XSD Type: ArrayOfPickupListShipmItem
 */
class ArrayOfPickupListShipmItemType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickupListShipmItemType[] $pickupListShipmItem
     */
    private $pickupListShipmItem = [
        
    ];

    /**
     * Adds as pickupListShipmItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickupListShipmItemType $pickupListShipmItem
     */
    public function addToPickupListShipmItem(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickupListShipmItemType $pickupListShipmItem)
    {
        $this->pickupListShipmItem[] = $pickupListShipmItem;
        return $this;
    }

    /**
     * isset pickupListShipmItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPickupListShipmItem($index)
    {
        return isset($this->pickupListShipmItem[$index]);
    }

    /**
     * unset pickupListShipmItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPickupListShipmItem($index)
    {
        unset($this->pickupListShipmItem[$index]);
    }

    /**
     * Gets as pickupListShipmItem
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickupListShipmItemType[]
     */
    public function getPickupListShipmItem()
    {
        return $this->pickupListShipmItem;
    }

    /**
     * Sets a new pickupListShipmItem
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickupListShipmItemType[] $pickupListShipmItem
     * @return self
     */
    public function setPickupListShipmItem(array $pickupListShipmItem)
    {
        $this->pickupListShipmItem = $pickupListShipmItem;
        return $this;
    }


}

