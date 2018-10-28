<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing StatusListResponse
 */
class StatusListResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfStatusRequestArrayOfStatuspMtQ0fwNType $statusListResult
     */
    private $statusListResult = null;

    /**
     * Gets as statusListResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfStatusRequestArrayOfStatuspMtQ0fwNType
     */
    public function getStatusListResult()
    {
        return $this->statusListResult;
    }

    /**
     * Sets a new statusListResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfStatusRequestArrayOfStatuspMtQ0fwNType $statusListResult
     * @return self
     */
    public function setStatusListResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfStatusRequestArrayOfStatuspMtQ0fwNType $statusListResult)
    {
        $this->statusListResult = $statusListResult;
        return $this;
    }


}

