<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing GetCurrenciesInput
 */
class GetCurrenciesInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\GetCurrencies $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\GetCurrencies
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\GetCurrencies $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\GetCurrencies $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

