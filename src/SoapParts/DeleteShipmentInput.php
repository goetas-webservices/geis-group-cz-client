<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing DeleteShipmentInput
 */
class DeleteShipmentInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DeleteShipment $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DeleteShipment
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DeleteShipment $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\DeleteShipment $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

