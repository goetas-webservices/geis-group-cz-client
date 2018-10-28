<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ArrayOfMergedItemType
 *
 *
 * XSD Type: ArrayOfMergedItem
 */
class ArrayOfMergedItemType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\MergedItemType[] $mergedItem
     */
    private $mergedItem = [
        
    ];

    /**
     * Adds as mergedItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\MergedItemType $mergedItem
     */
    public function addToMergedItem(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\MergedItemType $mergedItem)
    {
        $this->mergedItem[] = $mergedItem;
        return $this;
    }

    /**
     * isset mergedItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMergedItem($index)
    {
        return isset($this->mergedItem[$index]);
    }

    /**
     * unset mergedItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMergedItem($index)
    {
        unset($this->mergedItem[$index]);
    }

    /**
     * Gets as mergedItem
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\MergedItemType[]
     */
    public function getMergedItem()
    {
        return $this->mergedItem;
    }

    /**
     * Sets a new mergedItem
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\MergedItemType[] $mergedItem
     * @return self
     */
    public function setMergedItem(array $mergedItem)
    {
        $this->mergedItem = $mergedItem;
        return $this;
    }


}

