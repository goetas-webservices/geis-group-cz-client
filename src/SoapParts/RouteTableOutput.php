<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing RouteTableOutput
 */
class RouteTableOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\RouteTableResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\RouteTableResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\RouteTableResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\RouteTableResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

