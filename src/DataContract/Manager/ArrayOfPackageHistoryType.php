<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfPackageHistoryType
 *
 *
 * XSD Type: ArrayOfPackageHistory
 */
class ArrayOfPackageHistoryType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageHistoryType[] $packageHistory
     */
    private $packageHistory = [
        
    ];

    /**
     * Adds as packageHistory
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageHistoryType $packageHistory
     */
    public function addToPackageHistory(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageHistoryType $packageHistory)
    {
        $this->packageHistory[] = $packageHistory;
        return $this;
    }

    /**
     * isset packageHistory
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageHistory($index)
    {
        return isset($this->packageHistory[$index]);
    }

    /**
     * unset packageHistory
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageHistory($index)
    {
        unset($this->packageHistory[$index]);
    }

    /**
     * Gets as packageHistory
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageHistoryType[]
     */
    public function getPackageHistory()
    {
        return $this->packageHistory;
    }

    /**
     * Sets a new packageHistory
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageHistoryType[] $packageHistory
     * @return self
     */
    public function setPackageHistory(array $packageHistory)
    {
        $this->packageHistory = $packageHistory;
        return $this;
    }


}

