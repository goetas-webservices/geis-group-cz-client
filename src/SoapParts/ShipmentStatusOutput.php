<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing ShipmentStatusOutput
 */
class ShipmentStatusOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\ShipmentStatusResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\ShipmentStatusResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\ShipmentStatusResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\ShipmentStatusResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

