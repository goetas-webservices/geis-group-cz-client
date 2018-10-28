<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing AssignRangeInput
 */
class AssignRangeInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\AssignRange $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\AssignRange
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\AssignRange $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\AssignRange $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

