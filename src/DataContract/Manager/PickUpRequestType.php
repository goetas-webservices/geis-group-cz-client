<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing PickUpRequestType
 *
 *
 * XSD Type: PickUpRequest
 */
class PickUpRequestType extends RequestObjectBaseType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ContactType $contact
     */
    private $contact = null;

    /**
     * @property int $countItems
     */
    private $countItems = null;

    /**
     * @property \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @property \DateTime $dateTo
     */
    private $dateTo = null;

    /**
     * @property int $distributionChannel
     */
    private $distributionChannel = null;

    /**
     * @property string $note
     */
    private $note = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickUpItemType[] $pickUpItems
     */
    private $pickUpItems = null;

    /**
     * @property string $temperatureMode
     */
    private $temperatureMode = null;

    /**
     * @property float $totalWeight
     */
    private $totalWeight = null;

    /**
     * Gets as contact
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ContactType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ContactType $contact
     * @return self
     */
    public function setContact(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ContactType $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as countItems
     *
     * @return int
     */
    public function getCountItems()
    {
        return $this->countItems;
    }

    /**
     * Sets a new countItems
     *
     * @param int $countItems
     * @return self
     */
    public function setCountItems($countItems)
    {
        $this->countItems = $countItems;
        return $this;
    }

    /**
     * Gets as dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as dateTo
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * @param \DateTime $dateTo
     * @return self
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

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
     * Gets as note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as pickUpItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickUpItemType $pickUpItem
     */
    public function addToPickUpItems(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickUpItemType $pickUpItem)
    {
        $this->pickUpItems[] = $pickUpItem;
        return $this;
    }

    /**
     * isset pickUpItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPickUpItems($index)
    {
        return isset($this->pickUpItems[$index]);
    }

    /**
     * unset pickUpItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPickUpItems($index)
    {
        unset($this->pickUpItems[$index]);
    }

    /**
     * Gets as pickUpItems
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickUpItemType[]
     */
    public function getPickUpItems()
    {
        return $this->pickUpItems;
    }

    /**
     * Sets a new pickUpItems
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PickUpItemType[] $pickUpItems
     * @return self
     */
    public function setPickUpItems(array $pickUpItems)
    {
        $this->pickUpItems = $pickUpItems;
        return $this;
    }

    /**
     * Gets as temperatureMode
     *
     * @return string
     */
    public function getTemperatureMode()
    {
        return $this->temperatureMode;
    }

    /**
     * Sets a new temperatureMode
     *
     * @param string $temperatureMode
     * @return self
     */
    public function setTemperatureMode($temperatureMode)
    {
        $this->temperatureMode = $temperatureMode;
        return $this;
    }

    /**
     * Gets as totalWeight
     *
     * @return float
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * Sets a new totalWeight
     *
     * @param float $totalWeight
     * @return self
     */
    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight = $totalWeight;
        return $this;
    }


}

