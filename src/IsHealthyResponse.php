<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing IsHealthyResponse
 */
class IsHealthyResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\HealhtyResponseType $isHealthyResult
     */
    private $isHealthyResult = null;

    /**
     * Gets as isHealthyResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\HealhtyResponseType
     */
    public function getIsHealthyResult()
    {
        return $this->isHealthyResult;
    }

    /**
     * Sets a new isHealthyResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\HealhtyResponseType $isHealthyResult
     * @return self
     */
    public function setIsHealthyResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\HealhtyResponseType $isHealthyResult)
    {
        $this->isHealthyResult = $isHealthyResult;
        return $this;
    }


}

