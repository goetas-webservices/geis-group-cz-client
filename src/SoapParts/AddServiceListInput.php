<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing AddServiceListInput
 */
class AddServiceListInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\AddServiceList $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\AddServiceList
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\AddServiceList $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\AddServiceList $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

