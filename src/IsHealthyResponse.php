<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing IsHealthyResponse
 */
class IsHealthyResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\HealhtyResponseType $isHealthyResult
     */
    private $isHealthyResult = null;

    /**
     * Gets as isHealthyResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\HealhtyResponseType
     */
    public function getIsHealthyResult()
    {
        return $this->isHealthyResult;
    }

    /**
     * Sets a new isHealthyResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\HealhtyResponseType $isHealthyResult
     * @return self
     */
    public function setIsHealthyResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\HealhtyResponseType $isHealthyResult)
    {
        $this->isHealthyResult = $isHealthyResult;
        return $this;
    }


}

