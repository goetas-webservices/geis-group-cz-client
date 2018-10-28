<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing LabelRequestType
 *
 *
 * XSD Type: LabelRequest
 */
class LabelRequestType extends RequestObjectBaseType
{

    /**
     * @property int $distributionChannel
     */
    private $distributionChannel = null;

    /**
     * @property int $format
     */
    private $format = null;

    /**
     * @property int $position
     */
    private $position = null;

    /**
     * @property int $resolution
     */
    private $resolution = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\LabelItemType[] $shipmentNumbers
     */
    private $shipmentNumbers = null;

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
     * Gets as format
     *
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * @param int $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param int $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as resolution
     *
     * @return int
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Sets a new resolution
     *
     * @param int $resolution
     * @return self
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
        return $this;
    }

    /**
     * Adds as labelItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\LabelItemType $labelItem
     */
    public function addToShipmentNumbers(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\LabelItemType $labelItem)
    {
        $this->shipmentNumbers[] = $labelItem;
        return $this;
    }

    /**
     * isset shipmentNumbers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentNumbers($index)
    {
        return isset($this->shipmentNumbers[$index]);
    }

    /**
     * unset shipmentNumbers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentNumbers($index)
    {
        unset($this->shipmentNumbers[$index]);
    }

    /**
     * Gets as shipmentNumbers
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\LabelItemType[]
     */
    public function getShipmentNumbers()
    {
        return $this->shipmentNumbers;
    }

    /**
     * Sets a new shipmentNumbers
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\LabelItemType[] $shipmentNumbers
     * @return self
     */
    public function setShipmentNumbers(array $shipmentNumbers)
    {
        $this->shipmentNumbers = $shipmentNumbers;
        return $this;
    }


}

