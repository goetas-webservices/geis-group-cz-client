<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing RouteTableResponse
 */
class RouteTableResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfRouteTableRequestArrayOfRouteTablepMtQ0fwNType $routeTableResult
     */
    private $routeTableResult = null;

    /**
     * Gets as routeTableResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfRouteTableRequestArrayOfRouteTablepMtQ0fwNType
     */
    public function getRouteTableResult()
    {
        return $this->routeTableResult;
    }

    /**
     * Sets a new routeTableResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfRouteTableRequestArrayOfRouteTablepMtQ0fwNType $routeTableResult
     * @return self
     */
    public function setRouteTableResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfRouteTableRequestArrayOfRouteTablepMtQ0fwNType $routeTableResult)
    {
        $this->routeTableResult = $routeTableResult;
        return $this;
    }


}

