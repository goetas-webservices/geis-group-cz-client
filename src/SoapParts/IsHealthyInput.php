<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing IsHealthyInput
 */
class IsHealthyInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\IsHealthy $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\IsHealthy
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\IsHealthy $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\IsHealthy $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

