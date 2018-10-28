<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing GetCurrenciesInput
 */
class GetCurrenciesInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\GetCurrencies $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\GetCurrencies
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\GetCurrencies $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\GetCurrencies $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

