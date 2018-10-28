<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing WrapType
 *
 *
 * XSD Type: Wrap
 */
class WrapType
{

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property bool $returnable
     */
    private $returnable = null;

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
     * Gets as returnable
     *
     * @return bool
     */
    public function getReturnable()
    {
        return $this->returnable;
    }

    /**
     * Sets a new returnable
     *
     * @param bool $returnable
     * @return self
     */
    public function setReturnable($returnable)
    {
        $this->returnable = $returnable;
        return $this;
    }


}

