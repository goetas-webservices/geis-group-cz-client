<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ArrayOfZipCodesType
 *
 *
 * XSD Type: ArrayOfZipCodes
 */
class ArrayOfZipCodesType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ZipCodesType[] $zipCodes
     */
    private $zipCodes = [
        
    ];

    /**
     * Adds as zipCodes
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ZipCodesType $zipCodes
     */
    public function addToZipCodes(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ZipCodesType $zipCodes)
    {
        $this->zipCodes[] = $zipCodes;
        return $this;
    }

    /**
     * isset zipCodes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetZipCodes($index)
    {
        return isset($this->zipCodes[$index]);
    }

    /**
     * unset zipCodes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetZipCodes($index)
    {
        unset($this->zipCodes[$index]);
    }

    /**
     * Gets as zipCodes
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ZipCodesType[]
     */
    public function getZipCodes()
    {
        return $this->zipCodes;
    }

    /**
     * Sets a new zipCodes
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ZipCodesType[] $zipCodes
     * @return self
     */
    public function setZipCodes(array $zipCodes)
    {
        $this->zipCodes = $zipCodes;
        return $this;
    }


}

