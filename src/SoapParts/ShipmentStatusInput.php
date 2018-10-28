<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing ShipmentStatusInput
 */
class ShipmentStatusInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\ShipmentStatus $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\ShipmentStatus
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\ShipmentStatus $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\ShipmentStatus $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

