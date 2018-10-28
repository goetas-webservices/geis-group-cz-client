<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing RangeDetailResponseItemType
 *
 *
 * XSD Type: RangeDetailResponseItem
 */
class RangeDetailResponseItemType
{

    /**
     * @property string $lastUsedNumber
     */
    private $lastUsedNumber = null;

    /**
     * @property string $rangeHigh
     */
    private $rangeHigh = null;

    /**
     * @property string $rangeLow
     */
    private $rangeLow = null;

    /**
     * @property string $remainingNumbers
     */
    private $remainingNumbers = null;

    /**
     * Gets as lastUsedNumber
     *
     * @return string
     */
    public function getLastUsedNumber()
    {
        return $this->lastUsedNumber;
    }

    /**
     * Sets a new lastUsedNumber
     *
     * @param string $lastUsedNumber
     * @return self
     */
    public function setLastUsedNumber($lastUsedNumber)
    {
        $this->lastUsedNumber = $lastUsedNumber;
        return $this;
    }

    /**
     * Gets as rangeHigh
     *
     * @return string
     */
    public function getRangeHigh()
    {
        return $this->rangeHigh;
    }

    /**
     * Sets a new rangeHigh
     *
     * @param string $rangeHigh
     * @return self
     */
    public function setRangeHigh($rangeHigh)
    {
        $this->rangeHigh = $rangeHigh;
        return $this;
    }

    /**
     * Gets as rangeLow
     *
     * @return string
     */
    public function getRangeLow()
    {
        return $this->rangeLow;
    }

    /**
     * Sets a new rangeLow
     *
     * @param string $rangeLow
     * @return self
     */
    public function setRangeLow($rangeLow)
    {
        $this->rangeLow = $rangeLow;
        return $this;
    }

    /**
     * Gets as remainingNumbers
     *
     * @return string
     */
    public function getRemainingNumbers()
    {
        return $this->remainingNumbers;
    }

    /**
     * Sets a new remainingNumbers
     *
     * @param string $remainingNumbers
     * @return self
     */
    public function setRemainingNumbers($remainingNumbers)
    {
        $this->remainingNumbers = $remainingNumbers;
        return $this;
    }


}

