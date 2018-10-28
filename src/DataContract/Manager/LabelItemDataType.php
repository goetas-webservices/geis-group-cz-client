<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing LabelItemDataType
 *
 *
 * XSD Type: LabelItemData
 */
class LabelItemDataType
{

    /**
     * @property mixed $data
     */
    private $data = null;

    /**
     * Gets as data
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param mixed $data
     * @return self
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }


}

