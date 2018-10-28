<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing OrderType
 *
 *
 * XSD Type: Order
 */
class OrderType
{

    /**
     * @property string $burstId
     */
    private $burstId = null;

    /**
     * @property string[] $mergedPackNumbers
     */
    private $mergedPackNumbers = null;

    /**
     * @property string $packNumber
     */
    private $packNumber = null;

    /**
     * Gets as burstId
     *
     * @return string
     */
    public function getBurstId()
    {
        return $this->burstId;
    }

    /**
     * Sets a new burstId
     *
     * @param string $burstId
     * @return self
     */
    public function setBurstId($burstId)
    {
        $this->burstId = $burstId;
        return $this;
    }

    /**
     * Adds as string
     *
     * @return self
     * @param string $string
     */
    public function addToMergedPackNumbers($string)
    {
        $this->mergedPackNumbers[] = $string;
        return $this;
    }

    /**
     * isset mergedPackNumbers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMergedPackNumbers($index)
    {
        return isset($this->mergedPackNumbers[$index]);
    }

    /**
     * unset mergedPackNumbers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMergedPackNumbers($index)
    {
        unset($this->mergedPackNumbers[$index]);
    }

    /**
     * Gets as mergedPackNumbers
     *
     * @return string[]
     */
    public function getMergedPackNumbers()
    {
        return $this->mergedPackNumbers;
    }

    /**
     * Sets a new mergedPackNumbers
     *
     * @param string[] $mergedPackNumbers
     * @return self
     */
    public function setMergedPackNumbers(array $mergedPackNumbers)
    {
        $this->mergedPackNumbers = $mergedPackNumbers;
        return $this;
    }

    /**
     * Gets as packNumber
     *
     * @return string
     */
    public function getPackNumber()
    {
        return $this->packNumber;
    }

    /**
     * Sets a new packNumber
     *
     * @param string $packNumber
     * @return self
     */
    public function setPackNumber($packNumber)
    {
        $this->packNumber = $packNumber;
        return $this;
    }


}

