<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing RangeDetailResponseType
 *
 *
 * XSD Type: RangeDetailResponse
 */
class RangeDetailResponseType
{

    /**
     * @property bool $assignAllowed
     */
    private $assignAllowed = null;

    /**
     * @property string $assignRangeLimit
     */
    private $assignRangeLimit = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RangeDetailResponseItemType[] $rangeDetailItem
     */
    private $rangeDetailItem = null;

    /**
     * Gets as assignAllowed
     *
     * @return bool
     */
    public function getAssignAllowed()
    {
        return $this->assignAllowed;
    }

    /**
     * Sets a new assignAllowed
     *
     * @param bool $assignAllowed
     * @return self
     */
    public function setAssignAllowed($assignAllowed)
    {
        $this->assignAllowed = $assignAllowed;
        return $this;
    }

    /**
     * Gets as assignRangeLimit
     *
     * @return string
     */
    public function getAssignRangeLimit()
    {
        return $this->assignRangeLimit;
    }

    /**
     * Sets a new assignRangeLimit
     *
     * @param string $assignRangeLimit
     * @return self
     */
    public function setAssignRangeLimit($assignRangeLimit)
    {
        $this->assignRangeLimit = $assignRangeLimit;
        return $this;
    }

    /**
     * Adds as rangeDetailResponseItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RangeDetailResponseItemType $rangeDetailResponseItem
     */
    public function addToRangeDetailItem(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RangeDetailResponseItemType $rangeDetailResponseItem)
    {
        $this->rangeDetailItem[] = $rangeDetailResponseItem;
        return $this;
    }

    /**
     * isset rangeDetailItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRangeDetailItem($index)
    {
        return isset($this->rangeDetailItem[$index]);
    }

    /**
     * unset rangeDetailItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRangeDetailItem($index)
    {
        unset($this->rangeDetailItem[$index]);
    }

    /**
     * Gets as rangeDetailItem
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RangeDetailResponseItemType[]
     */
    public function getRangeDetailItem()
    {
        return $this->rangeDetailItem;
    }

    /**
     * Sets a new rangeDetailItem
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RangeDetailResponseItemType[] $rangeDetailItem
     * @return self
     */
    public function setRangeDetailItem(array $rangeDetailItem)
    {
        $this->rangeDetailItem = $rangeDetailItem;
        return $this;
    }


}

