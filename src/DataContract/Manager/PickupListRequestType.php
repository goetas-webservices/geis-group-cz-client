<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing PickupListRequestType
 *
 *
 * XSD Type: PickupListRequest
 */
class PickupListRequestType extends RequestObjectBaseType
{

    /**
     * @property int $distributionChannel
     */
    private $distributionChannel = null;

    /**
     * @property \DateTime $expeditionCreateDate
     */
    private $expeditionCreateDate = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickupListShipmItemType[] $shipmentsNumbers
     */
    private $shipmentsNumbers = null;

    /**
     * Gets as distributionChannel
     *
     * @return int
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel;
    }

    /**
     * Sets a new distributionChannel
     *
     * @param int $distributionChannel
     * @return self
     */
    public function setDistributionChannel($distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;
        return $this;
    }

    /**
     * Gets as expeditionCreateDate
     *
     * @return \DateTime
     */
    public function getExpeditionCreateDate()
    {
        return $this->expeditionCreateDate;
    }

    /**
     * Sets a new expeditionCreateDate
     *
     * @param \DateTime $expeditionCreateDate
     * @return self
     */
    public function setExpeditionCreateDate(\DateTime $expeditionCreateDate)
    {
        $this->expeditionCreateDate = $expeditionCreateDate;
        return $this;
    }

    /**
     * Adds as pickupListShipmItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickupListShipmItemType $pickupListShipmItem
     */
    public function addToShipmentsNumbers(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickupListShipmItemType $pickupListShipmItem)
    {
        $this->shipmentsNumbers[] = $pickupListShipmItem;
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
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickupListShipmItemType[]
     */
    public function getShipmentsNumbers()
    {
        return $this->shipmentsNumbers;
    }

    /**
     * Sets a new shipmentsNumbers
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickupListShipmItemType[] $shipmentsNumbers
     * @return self
     */
    public function setShipmentsNumbers(array $shipmentsNumbers)
    {
        $this->shipmentsNumbers = $shipmentsNumbers;
        return $this;
    }


}

