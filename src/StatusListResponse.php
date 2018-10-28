<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing StatusListResponse
 */
class StatusListResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfStatusRequestArrayOfStatuspMtQ0fwNType $statusListResult
     */
    private $statusListResult = null;

    /**
     * Gets as statusListResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfStatusRequestArrayOfStatuspMtQ0fwNType
     */
    public function getStatusListResult()
    {
        return $this->statusListResult;
    }

    /**
     * Sets a new statusListResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfStatusRequestArrayOfStatuspMtQ0fwNType $statusListResult
     * @return self
     */
    public function setStatusListResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfStatusRequestArrayOfStatuspMtQ0fwNType $statusListResult)
    {
        $this->statusListResult = $statusListResult;
        return $this;
    }


}

