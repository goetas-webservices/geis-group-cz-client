<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing RouteTableResponse
 */
class RouteTableResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfRouteTableRequestArrayOfRouteTablepMtQ0fwNType $routeTableResult
     */
    private $routeTableResult = null;

    /**
     * Gets as routeTableResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfRouteTableRequestArrayOfRouteTablepMtQ0fwNType
     */
    public function getRouteTableResult()
    {
        return $this->routeTableResult;
    }

    /**
     * Sets a new routeTableResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfRouteTableRequestArrayOfRouteTablepMtQ0fwNType $routeTableResult
     * @return self
     */
    public function setRouteTableResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfRouteTableRequestArrayOfRouteTablepMtQ0fwNType $routeTableResult)
    {
        $this->routeTableResult = $routeTableResult;
        return $this;
    }


}

