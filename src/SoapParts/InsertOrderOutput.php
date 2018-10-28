<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing InsertOrderOutput
 */
class InsertOrderOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\InsertOrderResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\InsertOrderResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\InsertOrderResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\InsertOrderResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

