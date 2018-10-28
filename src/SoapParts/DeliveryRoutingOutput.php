<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing DeliveryRoutingOutput
 */
class DeliveryRoutingOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DeliveryRoutingResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DeliveryRoutingResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DeliveryRoutingResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\DeliveryRoutingResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

