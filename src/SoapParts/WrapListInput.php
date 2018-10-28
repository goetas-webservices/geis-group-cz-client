<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing WrapListInput
 */
class WrapListInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\WrapList $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\WrapList
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\WrapList $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\WrapList $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

