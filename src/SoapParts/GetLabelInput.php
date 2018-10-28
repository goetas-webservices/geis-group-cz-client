<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing GetLabelInput
 */
class GetLabelInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\GetLabel $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\GetLabel
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\GetLabel $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\GetLabel $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

