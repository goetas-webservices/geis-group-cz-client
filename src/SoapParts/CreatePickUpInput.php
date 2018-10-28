<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing CreatePickUpInput
 */
class CreatePickUpInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\CreatePickUp $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\CreatePickUp
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\CreatePickUp $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\CreatePickUp $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

