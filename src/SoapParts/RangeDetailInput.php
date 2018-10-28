<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing RangeDetailInput
 */
class RangeDetailInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\RangeDetail $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\RangeDetail
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\RangeDetail $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\RangeDetail $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

