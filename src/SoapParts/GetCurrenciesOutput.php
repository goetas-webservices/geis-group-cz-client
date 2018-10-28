<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing GetCurrenciesOutput
 */
class GetCurrenciesOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\GetCurrenciesResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\GetCurrenciesResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\GetCurrenciesResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\GetCurrenciesResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

