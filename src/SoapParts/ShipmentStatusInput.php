<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing ShipmentStatusInput
 */
class ShipmentStatusInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\ShipmentStatus $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\ShipmentStatus
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\ShipmentStatus $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\ShipmentStatus $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

