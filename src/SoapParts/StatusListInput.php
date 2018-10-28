<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing StatusListInput
 */
class StatusListInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\StatusList $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\StatusList
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\StatusList $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\StatusList $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

