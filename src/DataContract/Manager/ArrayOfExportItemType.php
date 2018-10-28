<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ArrayOfExportItemType
 *
 *
 * XSD Type: ArrayOfExportItem
 */
class ArrayOfExportItemType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportItemType[] $exportItem
     */
    private $exportItem = [
        
    ];

    /**
     * Adds as exportItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportItemType $exportItem
     */
    public function addToExportItem(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportItemType $exportItem)
    {
        $this->exportItem[] = $exportItem;
        return $this;
    }

    /**
     * isset exportItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExportItem($index)
    {
        return isset($this->exportItem[$index]);
    }

    /**
     * unset exportItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExportItem($index)
    {
        unset($this->exportItem[$index]);
    }

    /**
     * Gets as exportItem
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportItemType[]
     */
    public function getExportItem()
    {
        return $this->exportItem;
    }

    /**
     * Sets a new exportItem
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportItemType[] $exportItem
     * @return self
     */
    public function setExportItem(array $exportItem)
    {
        $this->exportItem = $exportItem;
        return $this;
    }


}

