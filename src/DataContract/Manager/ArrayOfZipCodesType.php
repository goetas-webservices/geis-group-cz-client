<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ArrayOfZipCodesType
 *
 *
 * XSD Type: ArrayOfZipCodes
 */
class ArrayOfZipCodesType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ZipCodesType[] $zipCodes
     */
    private $zipCodes = [
        
    ];

    /**
     * Adds as zipCodes
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ZipCodesType $zipCodes
     */
    public function addToZipCodes(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ZipCodesType $zipCodes)
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
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ZipCodesType[]
     */
    public function getZipCodes()
    {
        return $this->zipCodes;
    }

    /**
     * Sets a new zipCodes
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ZipCodesType[] $zipCodes
     * @return self
     */
    public function setZipCodes(array $zipCodes)
    {
        $this->zipCodes = $zipCodes;
        return $this;
    }


}

