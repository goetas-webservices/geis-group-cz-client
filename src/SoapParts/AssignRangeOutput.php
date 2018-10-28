<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing AssignRangeOutput
 */
class AssignRangeOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\AssignRangeResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\AssignRangeResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\AssignRangeResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\AssignRangeResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

