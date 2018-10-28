<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing ListOfShipmentsOutput
 */
class ListOfShipmentsOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\ListOfShipmentsResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\ListOfShipmentsResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\ListOfShipmentsResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\ListOfShipmentsResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

