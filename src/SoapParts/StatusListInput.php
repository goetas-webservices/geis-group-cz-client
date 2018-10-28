<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing StatusListInput
 */
class StatusListInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\StatusList $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\StatusList
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\StatusList $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\StatusList $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

