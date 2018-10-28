<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing AddServiceListOutput
 */
class AddServiceListOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\AddServiceListResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\AddServiceListResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\AddServiceListResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\AddServiceListResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

