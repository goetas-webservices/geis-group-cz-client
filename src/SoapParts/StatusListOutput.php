<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing StatusListOutput
 */
class StatusListOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\StatusListResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\StatusListResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\StatusListResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\StatusListResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

