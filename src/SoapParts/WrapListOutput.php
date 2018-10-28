<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing WrapListOutput
 */
class WrapListOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\WrapListResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\WrapListResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\WrapListResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\WrapListResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

