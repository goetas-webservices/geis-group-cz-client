<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing IsHealthyOutput
 */
class IsHealthyOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\IsHealthyResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\IsHealthyResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\IsHealthyResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\IsHealthyResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

