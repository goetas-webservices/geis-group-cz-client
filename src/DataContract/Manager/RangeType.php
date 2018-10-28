<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing RangeType
 *
 *
 * XSD Type: Range
 */
class RangeType
{

    /**
     * @property string $rangeHigh
     */
    private $rangeHigh = null;

    /**
     * @property string $rangeLow
     */
    private $rangeLow = null;

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


}

