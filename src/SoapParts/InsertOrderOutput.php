<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing InsertOrderOutput
 */
class InsertOrderOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\InsertOrderResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\InsertOrderResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\InsertOrderResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\InsertOrderResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

