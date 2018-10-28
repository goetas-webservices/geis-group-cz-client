<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing DeliveryRoutingOutput
 */
class DeliveryRoutingOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DeliveryRoutingResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DeliveryRoutingResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DeliveryRoutingResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\DeliveryRoutingResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

