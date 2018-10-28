<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing ShipmentDetailOutput
 */
class ShipmentDetailOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\ShipmentDetailResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\ShipmentDetailResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\ShipmentDetailResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\ShipmentDetailResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

