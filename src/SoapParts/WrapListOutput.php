<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing WrapListOutput
 */
class WrapListOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\WrapListResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\WrapListResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\WrapListResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\WrapListResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

