<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing ServiceListOutput
 */
class ServiceListOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\ServiceListResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\ServiceListResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\ServiceListResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\ServiceListResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

