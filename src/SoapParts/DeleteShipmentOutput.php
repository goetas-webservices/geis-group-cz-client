<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing DeleteShipmentOutput
 */
class DeleteShipmentOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DeleteShipmentResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DeleteShipmentResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DeleteShipmentResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\DeleteShipmentResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

