<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing RangeDetailInput
 */
class RangeDetailInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\RangeDetail $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\RangeDetail
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\RangeDetail $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\RangeDetail $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

