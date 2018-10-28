<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing DeliveryRoutingInput
 */
class DeliveryRoutingInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DeliveryRouting $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DeliveryRouting
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DeliveryRouting $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\DeliveryRouting $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

