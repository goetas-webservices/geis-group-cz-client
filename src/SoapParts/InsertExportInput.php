<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing InsertExportInput
 */
class InsertExportInput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\InsertExport $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\InsertExport
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\InsertExport $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\InsertExport $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

