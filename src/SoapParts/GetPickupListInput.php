<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing GetPickupListInput
 */
class GetPickupListInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\GetPickupList $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\GetPickupList
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\GetPickupList $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\GetPickupList $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

