<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing CreatePickUpOutput
 */
class CreatePickUpOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\CreatePickUpResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\CreatePickUpResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\CreatePickUpResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\CreatePickUpResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

