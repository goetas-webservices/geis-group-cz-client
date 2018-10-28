<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfCurrencyType
 *
 *
 * XSD Type: ArrayOfCurrency
 */
class ArrayOfCurrencyType
{

    /**
     * @property string[] $currency
     */
    private $currency = [
        
    ];

    /**
     * Adds as currency
     *
     * @return self
     * @param string $currency
     */
    public function addToCurrency($currency)
    {
        $this->currency[] = $currency;
        return $this;
    }

    /**
     * isset currency
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCurrency($index)
    {
        return isset($this->currency[$index]);
    }

    /**
     * unset currency
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCurrency($index)
    {
        unset($this->currency[$index]);
    }

    /**
     * Gets as currency
     *
     * @return string[]
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency(array $currency)
    {
        $this->currency = $currency;
        return $this;
    }


}

