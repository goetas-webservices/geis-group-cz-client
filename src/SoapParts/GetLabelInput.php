<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing GetLabelInput
 */
class GetLabelInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\GetLabel $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\GetLabel
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\GetLabel $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\GetLabel $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

