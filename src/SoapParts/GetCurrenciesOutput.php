<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing GetCurrenciesOutput
 */
class GetCurrenciesOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\GetCurrenciesResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\GetCurrenciesResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\GetCurrenciesResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\GetCurrenciesResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

