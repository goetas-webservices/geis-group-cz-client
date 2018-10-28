<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing ServiceListInput
 */
class ServiceListInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\ServiceList $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\ServiceList
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\ServiceList $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\ServiceList $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

