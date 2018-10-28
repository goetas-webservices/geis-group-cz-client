<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ExportItemType
 *
 *
 * XSD Type: ExportItem
 */
class ExportItemType
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
     * @property float $height
     */
    private $height = null;

    /**
     * @property float $length
     */
    private $length = null;

    /**
     * @property string $reference
     */
    private $reference = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property float $volume
     */
    private $volume = null;

    /**
     * @property float $weight
     */
    private $weight = null;

    /**
     * @property float $width
     */
    private $width = null;

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
     * Gets as height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param float $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as length
     *
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * @param float $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
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

    /**
     * Gets as width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param float $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }


}

