<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing RangeDetailOutput
 */
class RangeDetailOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\RangeDetailResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\RangeDetailResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\RangeDetailResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\RangeDetailResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

