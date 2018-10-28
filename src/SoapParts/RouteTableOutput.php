<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing RouteTableOutput
 */
class RouteTableOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\RouteTableResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\RouteTableResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\RouteTableResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\RouteTableResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

