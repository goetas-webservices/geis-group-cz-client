<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing ShipmentDetailOutput
 */
class ShipmentDetailOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\ShipmentDetailResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\ShipmentDetailResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\ShipmentDetailResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\ShipmentDetailResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

