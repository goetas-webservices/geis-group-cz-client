<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing ServiceListInput
 */
class ServiceListInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\ServiceList $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\ServiceList
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\ServiceList $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\ServiceList $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

