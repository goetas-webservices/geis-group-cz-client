<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing InsertExportResponse
 */
class InsertExportResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfExportRequestExportpMtQ0fwNType $insertExportResult
     */
    private $insertExportResult = null;

    /**
     * Gets as insertExportResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfExportRequestExportpMtQ0fwNType
     */
    public function getInsertExportResult()
    {
        return $this->insertExportResult;
    }

    /**
     * Sets a new insertExportResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfExportRequestExportpMtQ0fwNType $insertExportResult
     * @return self
     */
    public function setInsertExportResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfExportRequestExportpMtQ0fwNType $insertExportResult)
    {
        $this->insertExportResult = $insertExportResult;
        return $this;
    }


}

