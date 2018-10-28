<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfLabelItemType
 *
 *
 * XSD Type: ArrayOfLabelItem
 */
class ArrayOfLabelItemType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemType[] $labelItem
     */
    private $labelItem = [
        
    ];

    /**
     * Adds as labelItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemType $labelItem
     */
    public function addToLabelItem(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemType $labelItem)
    {
        $this->labelItem[] = $labelItem;
        return $this;
    }

    /**
     * isset labelItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabelItem($index)
    {
        return isset($this->labelItem[$index]);
    }

    /**
     * unset labelItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabelItem($index)
    {
        unset($this->labelItem[$index]);
    }

    /**
     * Gets as labelItem
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemType[]
     */
    public function getLabelItem()
    {
        return $this->labelItem;
    }

    /**
     * Sets a new labelItem
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\LabelItemType[] $labelItem
     * @return self
     */
    public function setLabelItem(array $labelItem)
    {
        $this->labelItem = $labelItem;
        return $this;
    }


}

