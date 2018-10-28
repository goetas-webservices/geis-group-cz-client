<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing LabelResponseType
 *
 *
 * XSD Type: LabelResponse
 */
class LabelResponseType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemDataType[] $labelData
     */
    private $labelData = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemType[] $shipmentNumbers
     */
    private $shipmentNumbers = null;

    /**
     * Adds as labelItemData
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemDataType $labelItemData
     */
    public function addToLabelData(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemDataType $labelItemData)
    {
        $this->labelData[] = $labelItemData;
        return $this;
    }

    /**
     * isset labelData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabelData($index)
    {
        return isset($this->labelData[$index]);
    }

    /**
     * unset labelData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabelData($index)
    {
        unset($this->labelData[$index]);
    }

    /**
     * Gets as labelData
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemDataType[]
     */
    public function getLabelData()
    {
        return $this->labelData;
    }

    /**
     * Sets a new labelData
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemDataType[] $labelData
     * @return self
     */
    public function setLabelData(array $labelData)
    {
        $this->labelData = $labelData;
        return $this;
    }

    /**
     * Adds as labelItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemType $labelItem
     */
    public function addToShipmentNumbers(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemType $labelItem)
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
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemType[]
     */
    public function getShipmentNumbers()
    {
        return $this->shipmentNumbers;
    }

    /**
     * Sets a new shipmentNumbers
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemType[] $shipmentNumbers
     * @return self
     */
    public function setShipmentNumbers(array $shipmentNumbers)
    {
        $this->shipmentNumbers = $shipmentNumbers;
        return $this;
    }


}

