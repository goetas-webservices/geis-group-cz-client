<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing WrapListInput
 */
class WrapListInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\WrapList $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\WrapList
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\WrapList $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\WrapList $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

