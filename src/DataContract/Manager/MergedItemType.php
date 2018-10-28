<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing MergedItemType
 *
 *
 * XSD Type: MergedItem
 */
class MergedItemType
{

    /**
     * @property string $note
     */
    private $note = null;

    /**
     * @property string $packNumber
     */
    private $packNumber = null;

    /**
     * @property string $partnerNumber
     */
    private $partnerNumber = null;

    /**
     * @property float $weight
     */
    private $weight = null;

    /**
     * Gets as note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as packNumber
     *
     * @return string
     */
    public function getPackNumber()
    {
        return $this->packNumber;
    }

    /**
     * Sets a new packNumber
     *
     * @param string $packNumber
     * @return self
     */
    public function setPackNumber($packNumber)
    {
        $this->packNumber = $packNumber;
        return $this;
    }

    /**
     * Gets as partnerNumber
     *
     * @return string
     */
    public function getPartnerNumber()
    {
        return $this->partnerNumber;
    }

    /**
     * Sets a new partnerNumber
     *
     * @param string $partnerNumber
     * @return self
     */
    public function setPartnerNumber($partnerNumber)
    {
        $this->partnerNumber = $partnerNumber;
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

