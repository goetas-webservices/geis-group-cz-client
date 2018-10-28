<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing RouteTableInput
 */
class RouteTableInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\RouteTable $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\RouteTable
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\RouteTable $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\RouteTable $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

