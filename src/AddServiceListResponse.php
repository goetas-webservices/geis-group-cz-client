<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing AddServiceListResponse
 */
class AddServiceListResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfAddServiceRequestArrayOfAddServicepMtQ0fwNType $addServiceListResult
     */
    private $addServiceListResult = null;

    /**
     * Gets as addServiceListResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfAddServiceRequestArrayOfAddServicepMtQ0fwNType
     */
    public function getAddServiceListResult()
    {
        return $this->addServiceListResult;
    }

    /**
     * Sets a new addServiceListResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfAddServiceRequestArrayOfAddServicepMtQ0fwNType $addServiceListResult
     * @return self
     */
    public function setAddServiceListResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfAddServiceRequestArrayOfAddServicepMtQ0fwNType $addServiceListResult)
    {
        $this->addServiceListResult = $addServiceListResult;
        return $this;
    }


}

