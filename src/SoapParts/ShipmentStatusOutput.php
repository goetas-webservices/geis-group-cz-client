<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing ShipmentStatusOutput
 */
class ShipmentStatusOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\ShipmentStatusResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\ShipmentStatusResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\ShipmentStatusResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\ShipmentStatusResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

