<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing InsertOrderInput
 */
class InsertOrderInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\InsertOrder $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\InsertOrder
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\InsertOrder $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\InsertOrder $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

