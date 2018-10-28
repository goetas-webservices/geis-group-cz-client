<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ZipCodesType
 *
 *
 * XSD Type: ZipCodes
 */
class ZipCodesType
{

    /**
     * @property string $zipCodeFrom
     */
    private $zipCodeFrom = null;

    /**
     * @property string $zipCodeTo
     */
    private $zipCodeTo = null;

    /**
     * Gets as zipCodeFrom
     *
     * @return string
     */
    public function getZipCodeFrom()
    {
        return $this->zipCodeFrom;
    }

    /**
     * Sets a new zipCodeFrom
     *
     * @param string $zipCodeFrom
     * @return self
     */
    public function setZipCodeFrom($zipCodeFrom)
    {
        $this->zipCodeFrom = $zipCodeFrom;
        return $this;
    }

    /**
     * Gets as zipCodeTo
     *
     * @return string
     */
    public function getZipCodeTo()
    {
        return $this->zipCodeTo;
    }

    /**
     * Sets a new zipCodeTo
     *
     * @param string $zipCodeTo
     * @return self
     */
    public function setZipCodeTo($zipCodeTo)
    {
        $this->zipCodeTo = $zipCodeTo;
        return $this;
    }


}

