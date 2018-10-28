<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ArrayOfExportServiceType
 *
 *
 * XSD Type: ArrayOfExportService
 */
class ArrayOfExportServiceType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportServiceType[] $exportService
     */
    private $exportService = [
        
    ];

    /**
     * Adds as exportService
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportServiceType $exportService
     */
    public function addToExportService(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportServiceType $exportService)
    {
        $this->exportService[] = $exportService;
        return $this;
    }

    /**
     * isset exportService
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExportService($index)
    {
        return isset($this->exportService[$index]);
    }

    /**
     * unset exportService
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExportService($index)
    {
        unset($this->exportService[$index]);
    }

    /**
     * Gets as exportService
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportServiceType[]
     */
    public function getExportService()
    {
        return $this->exportService;
    }

    /**
     * Sets a new exportService
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportServiceType[] $exportService
     * @return self
     */
    public function setExportService(array $exportService)
    {
        $this->exportService = $exportService;
        return $this;
    }


}

