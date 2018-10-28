<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing InsertOrderInput
 */
class InsertOrderInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\InsertOrder $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\InsertOrder
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\InsertOrder $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\InsertOrder $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

