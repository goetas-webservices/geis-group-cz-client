<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfRouteTableType
 *
 *
 * XSD Type: ArrayOfRouteTable
 */
class ArrayOfRouteTableType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RouteTableType[] $routeTable
     */
    private $routeTable = [
        
    ];

    /**
     * Adds as routeTable
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RouteTableType $routeTable
     */
    public function addToRouteTable(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RouteTableType $routeTable)
    {
        $this->routeTable[] = $routeTable;
        return $this;
    }

    /**
     * isset routeTable
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRouteTable($index)
    {
        return isset($this->routeTable[$index]);
    }

    /**
     * unset routeTable
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRouteTable($index)
    {
        unset($this->routeTable[$index]);
    }

    /**
     * Gets as routeTable
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RouteTableType[]
     */
    public function getRouteTable()
    {
        return $this->routeTable;
    }

    /**
     * Sets a new routeTable
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RouteTableType[] $routeTable
     * @return self
     */
    public function setRouteTable(array $routeTable)
    {
        $this->routeTable = $routeTable;
        return $this;
    }


}

