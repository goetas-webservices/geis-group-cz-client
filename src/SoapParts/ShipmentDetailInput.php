<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing ShipmentDetailInput
 */
class ShipmentDetailInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\ShipmentDetail $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\ShipmentDetail
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\ShipmentDetail $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\ShipmentDetail $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

