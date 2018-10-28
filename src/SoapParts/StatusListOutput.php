<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing StatusListOutput
 */
class StatusListOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\StatusListResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\StatusListResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\StatusListResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\StatusListResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

