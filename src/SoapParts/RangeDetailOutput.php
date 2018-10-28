<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing RangeDetailOutput
 */
class RangeDetailOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\RangeDetailResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\RangeDetailResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\RangeDetailResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\RangeDetailResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

