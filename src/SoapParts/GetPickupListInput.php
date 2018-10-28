<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing GetPickupListInput
 */
class GetPickupListInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\GetPickupList $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\GetPickupList
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\GetPickupList $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\GetPickupList $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

