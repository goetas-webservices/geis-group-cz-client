<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing GetLabelOutput
 */
class GetLabelOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\GetLabelResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\GetLabelResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\GetLabelResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\GetLabelResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

