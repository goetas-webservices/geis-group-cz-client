<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ArrayOfPackageHistoryType
 *
 *
 * XSD Type: ArrayOfPackageHistory
 */
class ArrayOfPackageHistoryType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\PackageHistoryType[] $packageHistory
     */
    private $packageHistory = [
        
    ];

    /**
     * Adds as packageHistory
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\PackageHistoryType $packageHistory
     */
    public function addToPackageHistory(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\PackageHistoryType $packageHistory)
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
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\PackageHistoryType[]
     */
    public function getPackageHistory()
    {
        return $this->packageHistory;
    }

    /**
     * Sets a new packageHistory
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\PackageHistoryType[] $packageHistory
     * @return self
     */
    public function setPackageHistory(array $packageHistory)
    {
        $this->packageHistory = $packageHistory;
        return $this;
    }


}

