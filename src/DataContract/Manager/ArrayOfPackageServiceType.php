<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfPackageServiceType
 *
 *
 * XSD Type: ArrayOfPackageService
 */
class ArrayOfPackageServiceType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageServiceType[] $packageService
     */
    private $packageService = [
        
    ];

    /**
     * Adds as packageService
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageServiceType $packageService
     */
    public function addToPackageService(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageServiceType $packageService)
    {
        $this->packageService[] = $packageService;
        return $this;
    }

    /**
     * isset packageService
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageService($index)
    {
        return isset($this->packageService[$index]);
    }

    /**
     * unset packageService
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageService($index)
    {
        unset($this->packageService[$index]);
    }

    /**
     * Gets as packageService
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageServiceType[]
     */
    public function getPackageService()
    {
        return $this->packageService;
    }

    /**
     * Sets a new packageService
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageServiceType[] $packageService
     * @return self
     */
    public function setPackageService(array $packageService)
    {
        $this->packageService = $packageService;
        return $this;
    }


}

