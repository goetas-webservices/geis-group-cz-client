<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing DeleteShipmentInput
 */
class DeleteShipmentInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DeleteShipment $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DeleteShipment
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DeleteShipment $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\DeleteShipment $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

