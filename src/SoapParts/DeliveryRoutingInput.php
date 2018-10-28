<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing DeliveryRoutingInput
 */
class DeliveryRoutingInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DeliveryRouting $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DeliveryRouting
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DeliveryRouting $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\DeliveryRouting $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

