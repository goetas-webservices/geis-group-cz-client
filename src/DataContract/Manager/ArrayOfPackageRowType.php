<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfPackageRowType
 *
 *
 * XSD Type: ArrayOfPackageRow
 */
class ArrayOfPackageRowType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageRowType[] $packageRow
     */
    private $packageRow = [
        
    ];

    /**
     * Adds as packageRow
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageRowType $packageRow
     */
    public function addToPackageRow(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageRowType $packageRow)
    {
        $this->packageRow[] = $packageRow;
        return $this;
    }

    /**
     * isset packageRow
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageRow($index)
    {
        return isset($this->packageRow[$index]);
    }

    /**
     * unset packageRow
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageRow($index)
    {
        unset($this->packageRow[$index]);
    }

    /**
     * Gets as packageRow
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageRowType[]
     */
    public function getPackageRow()
    {
        return $this->packageRow;
    }

    /**
     * Sets a new packageRow
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageRowType[] $packageRow
     * @return self
     */
    public function setPackageRow(array $packageRow)
    {
        $this->packageRow = $packageRow;
        return $this;
    }


}

