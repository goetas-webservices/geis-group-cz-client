<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing GetCurrenciesResponse
 */
class GetCurrenciesResponse
{

    /**
     * @property string[] $getCurrenciesResult
     */
    private $getCurrenciesResult = null;

    /**
     * Adds as currency
     *
     * @return self
     * @param string $currency
     */
    public function addToGetCurrenciesResult($currency)
    {
        $this->getCurrenciesResult[] = $currency;
        return $this;
    }

    /**
     * isset getCurrenciesResult
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGetCurrenciesResult($index)
    {
        return isset($this->getCurrenciesResult[$index]);
    }

    /**
     * unset getCurrenciesResult
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGetCurrenciesResult($index)
    {
        unset($this->getCurrenciesResult[$index]);
    }

    /**
     * Gets as getCurrenciesResult
     *
     * @return string[]
     */
    public function getGetCurrenciesResult()
    {
        return $this->getCurrenciesResult;
    }

    /**
     * Sets a new getCurrenciesResult
     *
     * @param string $getCurrenciesResult
     * @return self
     */
    public function setGetCurrenciesResult(array $getCurrenciesResult)
    {
        $this->getCurrenciesResult = $getCurrenciesResult;
        return $this;
    }


}

