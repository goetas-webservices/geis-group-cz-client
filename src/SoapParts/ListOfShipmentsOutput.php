<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing ListOfShipmentsOutput
 */
class ListOfShipmentsOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\ListOfShipmentsResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\ListOfShipmentsResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\ListOfShipmentsResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\ListOfShipmentsResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

