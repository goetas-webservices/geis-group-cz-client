<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ArrayOfRangeDetailResponseItemType
 *
 *
 * XSD Type: ArrayOfRangeDetailResponseItem
 */
class ArrayOfRangeDetailResponseItemType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RangeDetailResponseItemType[] $rangeDetailResponseItem
     */
    private $rangeDetailResponseItem = [
        
    ];

    /**
     * Adds as rangeDetailResponseItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RangeDetailResponseItemType $rangeDetailResponseItem
     */
    public function addToRangeDetailResponseItem(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RangeDetailResponseItemType $rangeDetailResponseItem)
    {
        $this->rangeDetailResponseItem[] = $rangeDetailResponseItem;
        return $this;
    }

    /**
     * isset rangeDetailResponseItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRangeDetailResponseItem($index)
    {
        return isset($this->rangeDetailResponseItem[$index]);
    }

    /**
     * unset rangeDetailResponseItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRangeDetailResponseItem($index)
    {
        unset($this->rangeDetailResponseItem[$index]);
    }

    /**
     * Gets as rangeDetailResponseItem
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RangeDetailResponseItemType[]
     */
    public function getRangeDetailResponseItem()
    {
        return $this->rangeDetailResponseItem;
    }

    /**
     * Sets a new rangeDetailResponseItem
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RangeDetailResponseItemType[] $rangeDetailResponseItem
     * @return self
     */
    public function setRangeDetailResponseItem(array $rangeDetailResponseItem)
    {
        $this->rangeDetailResponseItem = $rangeDetailResponseItem;
        return $this;
    }


}

