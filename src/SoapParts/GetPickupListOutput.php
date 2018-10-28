<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing GetPickupListOutput
 */
class GetPickupListOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\GetPickupListResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\GetPickupListResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\GetPickupListResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\GetPickupListResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

