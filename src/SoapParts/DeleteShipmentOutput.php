<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing DeleteShipmentOutput
 */
class DeleteShipmentOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DeleteShipmentResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DeleteShipmentResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DeleteShipmentResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\DeleteShipmentResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

