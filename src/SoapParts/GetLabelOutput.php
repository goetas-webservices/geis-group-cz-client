<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing GetLabelOutput
 */
class GetLabelOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\GetLabelResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\GetLabelResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\GetLabelResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\GetLabelResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

