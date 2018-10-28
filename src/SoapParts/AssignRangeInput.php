<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing AssignRangeInput
 */
class AssignRangeInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\AssignRange $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\AssignRange
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\AssignRange $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\AssignRange $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

