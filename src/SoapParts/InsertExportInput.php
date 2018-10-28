<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapParts;

/**
 * Class representing InsertExportInput
 */
class InsertExportInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\InsertExport $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\InsertExport
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\InsertExport $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGrouCz\InsertExport $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

