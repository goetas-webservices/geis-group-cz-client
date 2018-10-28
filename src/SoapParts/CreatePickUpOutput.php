<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing CreatePickUpOutput
 */
class CreatePickUpOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\CreatePickUpResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\CreatePickUpResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\CreatePickUpResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\CreatePickUpResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

