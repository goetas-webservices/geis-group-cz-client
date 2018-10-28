<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ShipmentRequestType
 *
 *
 * XSD Type: ShipmentRequest
 */
class ShipmentRequestType extends RequestObjectBaseType
{

    /**
     * @property string $burstId
     */
    private $burstId = null;

    /**
     * @property \DateTime $created
     */
    private $created = null;

    /**
     * @property \DateTime $dateExpOrOrder
     */
    private $dateExpOrOrder = null;

    /**
     * Gets as burstId
     *
     * @return string
     */
    public function getBurstId()
    {
        return $this->burstId;
    }

    /**
     * Sets a new burstId
     *
     * @param string $burstId
     * @return self
     */
    public function setBurstId($burstId)
    {
        $this->burstId = $burstId;
        return $this;
    }

    /**
     * Gets as created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * @param \DateTime $created
     * @return self
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as dateExpOrOrder
     *
     * @return \DateTime
     */
    public function getDateExpOrOrder()
    {
        return $this->dateExpOrOrder;
    }

    /**
     * Sets a new dateExpOrOrder
     *
     * @param \DateTime $dateExpOrOrder
     * @return self
     */
    public function setDateExpOrOrder(\DateTime $dateExpOrOrder)
    {
        $this->dateExpOrOrder = $dateExpOrOrder;
        return $this;
    }


}

