<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing AddServiceListOutput
 */
class AddServiceListOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\AddServiceListResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\AddServiceListResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\AddServiceListResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\AddServiceListResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

