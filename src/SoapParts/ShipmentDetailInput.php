<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing ShipmentDetailInput
 */
class ShipmentDetailInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\ShipmentDetail $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\ShipmentDetail
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\ShipmentDetail $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\ShipmentDetail $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

