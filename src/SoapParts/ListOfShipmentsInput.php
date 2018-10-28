<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing ListOfShipmentsInput
 */
class ListOfShipmentsInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\ListOfShipments $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\ListOfShipments
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\ListOfShipments $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\ListOfShipments $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

