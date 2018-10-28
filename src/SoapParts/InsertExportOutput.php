<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapParts;

/**
 * Class representing InsertExportOutput
 */
class InsertExportOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\InsertExportResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\InsertExportResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\InsertExportResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\GeisGroupCz\InsertExportResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

