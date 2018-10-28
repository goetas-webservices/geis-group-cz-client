<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing AddServiceType
 *
 *
 * XSD Type: AddService
 */
class AddServiceType
{

    /**
     * @property string $abbreviation
     */
    private $abbreviation = null;

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $service
     */
    private $service = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ZipCodesType[] $zipCodesList
     */
    private $zipCodesList = null;

    /**
     * Gets as abbreviation
     *
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * Sets a new abbreviation
     *
     * @param string $abbreviation
     * @return self
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param string $service
     * @return self
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Adds as zipCodes
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ZipCodesType $zipCodes
     */
    public function addToZipCodesList(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ZipCodesType $zipCodes)
    {
        $this->zipCodesList[] = $zipCodes;
        return $this;
    }

    /**
     * isset zipCodesList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetZipCodesList($index)
    {
        return isset($this->zipCodesList[$index]);
    }

    /**
     * unset zipCodesList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetZipCodesList($index)
    {
        unset($this->zipCodesList[$index]);
    }

    /**
     * Gets as zipCodesList
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ZipCodesType[]
     */
    public function getZipCodesList()
    {
        return $this->zipCodesList;
    }

    /**
     * Sets a new zipCodesList
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ZipCodesType[] $zipCodesList
     * @return self
     */
    public function setZipCodesList(array $zipCodesList)
    {
        $this->zipCodesList = $zipCodesList;
        return $this;
    }


}

