<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing RouteTableInput
 */
class RouteTableInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\RouteTable $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\RouteTable
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\RouteTable $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\RouteTable $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

