<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing GetPickupListOutput
 */
class GetPickupListOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\GetPickupListResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\GetPickupListResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\GetPickupListResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\GetPickupListResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

