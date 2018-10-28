<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing PackageRowType
 *
 *
 * XSD Type: PackageRow
 */
class PackageRowType
{

    /**
     * @property int $countItems
     */
    private $countItems = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $dimensions
     */
    private $dimensions = null;

    /**
     * @property string $packingType
     */
    private $packingType = null;

    /**
     * @property string $reference
     */
    private $reference = null;

    /**
     * @property float $volume
     */
    private $volume = null;

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
     * Gets as dimensions
     *
     * @return string
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Sets a new dimensions
     *
     * @param string $dimensions
     * @return self
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * Gets as packingType
     *
     * @return string
     */
    public function getPackingType()
    {
        return $this->packingType;
    }

    /**
     * Sets a new packingType
     *
     * @param string $packingType
     * @return self
     */
    public function setPackingType($packingType)
    {
        $this->packingType = $packingType;
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
     * Gets as volume
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Sets a new volume
     *
     * @param float $volume
     * @return self
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
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

