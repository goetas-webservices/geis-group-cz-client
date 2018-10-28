<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing InsertExportOutput
 */
class InsertExportOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\InsertExportResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\InsertExportResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\InsertExportResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\InsertExportResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

