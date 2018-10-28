<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfStatusType
 *
 *
 * XSD Type: ArrayOfStatus
 */
class ArrayOfStatusType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\StatusType[] $status
     */
    private $status = [
        
    ];

    /**
     * Adds as status
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\StatusType $status
     */
    public function addToStatus(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\StatusType $status)
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * isset status
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatus($index)
    {
        return isset($this->status[$index]);
    }

    /**
     * unset status
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatus($index)
    {
        unset($this->status[$index]);
    }

    /**
     * Gets as status
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\StatusType[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\StatusType[] $status
     * @return self
     */
    public function setStatus(array $status)
    {
        $this->status = $status;
        return $this;
    }


}

