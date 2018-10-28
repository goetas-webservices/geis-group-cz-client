<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing ServiceListOutput
 */
class ServiceListOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\ServiceListResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\ServiceListResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\ServiceListResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\ServiceListResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

