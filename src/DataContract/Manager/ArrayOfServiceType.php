<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfServiceType
 *
 *
 * XSD Type: ArrayOfService
 */
class ArrayOfServiceType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ServiceType[] $service
     */
    private $service = [
        
    ];

    /**
     * Adds as service
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ServiceType $service
     */
    public function addToService(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ServiceType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ServiceType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ServiceType[] $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }


}

