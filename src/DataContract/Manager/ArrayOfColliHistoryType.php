<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfColliHistoryType
 *
 *
 * XSD Type: ArrayOfColliHistory
 */
class ArrayOfColliHistoryType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ColliHistoryType[] $colliHistory
     */
    private $colliHistory = [
        
    ];

    /**
     * Adds as colliHistory
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ColliHistoryType $colliHistory
     */
    public function addToColliHistory(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ColliHistoryType $colliHistory)
    {
        $this->colliHistory[] = $colliHistory;
        return $this;
    }

    /**
     * isset colliHistory
     *
     * @param int|string $index
     * @return bool
     */
    public function issetColliHistory($index)
    {
        return isset($this->colliHistory[$index]);
    }

    /**
     * unset colliHistory
     *
     * @param int|string $index
     * @return void
     */
    public function unsetColliHistory($index)
    {
        unset($this->colliHistory[$index]);
    }

    /**
     * Gets as colliHistory
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ColliHistoryType[]
     */
    public function getColliHistory()
    {
        return $this->colliHistory;
    }

    /**
     * Sets a new colliHistory
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ColliHistoryType[] $colliHistory
     * @return self
     */
    public function setColliHistory(array $colliHistory)
    {
        $this->colliHistory = $colliHistory;
        return $this;
    }


}

