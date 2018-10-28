<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing AddServiceListResponse
 */
class AddServiceListResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfAddServiceRequestArrayOfAddServicepMtQ0fwNType $addServiceListResult
     */
    private $addServiceListResult = null;

    /**
     * Gets as addServiceListResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfAddServiceRequestArrayOfAddServicepMtQ0fwNType
     */
    public function getAddServiceListResult()
    {
        return $this->addServiceListResult;
    }

    /**
     * Sets a new addServiceListResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfAddServiceRequestArrayOfAddServicepMtQ0fwNType $addServiceListResult
     * @return self
     */
    public function setAddServiceListResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfAddServiceRequestArrayOfAddServicepMtQ0fwNType $addServiceListResult)
    {
        $this->addServiceListResult = $addServiceListResult;
        return $this;
    }


}

