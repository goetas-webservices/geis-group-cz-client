<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing IsHealthyOutput
 */
class IsHealthyOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\IsHealthyResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\IsHealthyResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\IsHealthyResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\IsHealthyResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

