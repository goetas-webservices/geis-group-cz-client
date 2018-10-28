<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing CreatePickUpInput
 */
class CreatePickUpInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\CreatePickUp $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\CreatePickUp
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\CreatePickUp $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\CreatePickUp $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

