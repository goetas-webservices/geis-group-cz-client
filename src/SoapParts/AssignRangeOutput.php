<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing AssignRangeOutput
 */
class AssignRangeOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\AssignRangeResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\AssignRangeResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\AssignRangeResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\AssignRangeResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

