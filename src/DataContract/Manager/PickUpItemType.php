<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing PickUpItemType
 *
 *
 * XSD Type: PickUpItem
 */
class PickUpItemType
{

    /**
     * @property int $countItems
     */
    private $countItems = null;

    /**
     * @property string $reference
     */
    private $reference = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property float $weight
     */
    private $weight = null;

    /**
     * Gets as countItems
     *
     * @return int
     */
    public function getCountItems()
    {
        return $this->countItems;
    }

    /**
     * Sets a new countItems
     *
     * @param int $countItems
     * @return self
     */
    public function setCountItems($countItems)
    {
        $this->countItems = $countItems;
        return $this;
    }

    /**
     * Gets as reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param string $reference
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param float $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }


}

