<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing ListOfShipmentsInput
 */
class ListOfShipmentsInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\ListOfShipments $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\ListOfShipments
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\ListOfShipments $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\ListOfShipments $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

