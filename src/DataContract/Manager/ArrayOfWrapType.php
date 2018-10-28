<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ArrayOfWrapType
 *
 *
 * XSD Type: ArrayOfWrap
 */
class ArrayOfWrapType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\WrapType[] $wrap
     */
    private $wrap = [
        
    ];

    /**
     * Adds as wrap
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\WrapType $wrap
     */
    public function addToWrap(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\WrapType $wrap)
    {
        $this->wrap[] = $wrap;
        return $this;
    }

    /**
     * isset wrap
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWrap($index)
    {
        return isset($this->wrap[$index]);
    }

    /**
     * unset wrap
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWrap($index)
    {
        unset($this->wrap[$index]);
    }

    /**
     * Gets as wrap
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\WrapType[]
     */
    public function getWrap()
    {
        return $this->wrap;
    }

    /**
     * Sets a new wrap
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\WrapType[] $wrap
     * @return self
     */
    public function setWrap(array $wrap)
    {
        $this->wrap = $wrap;
        return $this;
    }


}

