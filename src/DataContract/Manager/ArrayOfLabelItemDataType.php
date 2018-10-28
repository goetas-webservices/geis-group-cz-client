<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfLabelItemDataType
 *
 *
 * XSD Type: ArrayOfLabelItemData
 */
class ArrayOfLabelItemDataType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemDataType[] $labelItemData
     */
    private $labelItemData = [
        
    ];

    /**
     * Adds as labelItemData
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemDataType $labelItemData
     */
    public function addToLabelItemData(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemDataType $labelItemData)
    {
        $this->labelItemData[] = $labelItemData;
        return $this;
    }

    /**
     * isset labelItemData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabelItemData($index)
    {
        return isset($this->labelItemData[$index]);
    }

    /**
     * unset labelItemData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabelItemData($index)
    {
        unset($this->labelItemData[$index]);
    }

    /**
     * Gets as labelItemData
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemDataType[]
     */
    public function getLabelItemData()
    {
        return $this->labelItemData;
    }

    /**
     * Sets a new labelItemData
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemDataType[] $labelItemData
     * @return self
     */
    public function setLabelItemData(array $labelItemData)
    {
        $this->labelItemData = $labelItemData;
        return $this;
    }


}

