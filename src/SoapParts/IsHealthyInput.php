<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing IsHealthyInput
 */
class IsHealthyInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\IsHealthy $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\IsHealthy
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\IsHealthy $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\IsHealthy $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

