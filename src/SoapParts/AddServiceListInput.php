<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing AddServiceListInput
 */
class AddServiceListInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\AddServiceList $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\AddServiceList
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\AddServiceList $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\AddServiceList $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

