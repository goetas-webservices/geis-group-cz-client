<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfAddServiceType
 *
 *
 * XSD Type: ArrayOfAddService
 */
class ArrayOfAddServiceType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddServiceType[] $addService
     */
    private $addService = [
        
    ];

    /**
     * Adds as addService
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddServiceType $addService
     */
    public function addToAddService(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddServiceType $addService)
    {
        $this->addService[] = $addService;
        return $this;
    }

    /**
     * isset addService
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddService($index)
    {
        return isset($this->addService[$index]);
    }

    /**
     * unset addService
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddService($index)
    {
        unset($this->addService[$index]);
    }

    /**
     * Gets as addService
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddServiceType[]
     */
    public function getAddService()
    {
        return $this->addService;
    }

    /**
     * Sets a new addService
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddServiceType[] $addService
     * @return self
     */
    public function setAddService(array $addService)
    {
        $this->addService = $addService;
        return $this;
    }


}

