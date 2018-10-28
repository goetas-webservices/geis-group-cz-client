<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing ServiceListResponse
 */
class ServiceListResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfServiceRequestArrayOfServicepMtQ0fwNType $serviceListResult
     */
    private $serviceListResult = null;

    /**
     * Gets as serviceListResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfServiceRequestArrayOfServicepMtQ0fwNType
     */
    public function getServiceListResult()
    {
        return $this->serviceListResult;
    }

    /**
     * Sets a new serviceListResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfServiceRequestArrayOfServicepMtQ0fwNType $serviceListResult
     * @return self
     */
    public function setServiceListResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfServiceRequestArrayOfServicepMtQ0fwNType $serviceListResult)
    {
        $this->serviceListResult = $serviceListResult;
        return $this;
    }


}

