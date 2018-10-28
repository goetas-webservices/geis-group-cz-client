<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing RangeRequestType
 *
 *
 * XSD Type: RangeRequest
 */
class RangeRequestType extends RequestObjectBaseType
{

    /**
     * @property int $distributionChannel
     */
    private $distributionChannel = null;

    /**
     * @property int $range
     */
    private $range = null;

    /**
     * @property int $transportType
     */
    private $transportType = null;

    /**
     * Gets as distributionChannel
     *
     * @return int
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel;
    }

    /**
     * Sets a new distributionChannel
     *
     * @param int $distributionChannel
     * @return self
     */
    public function setDistributionChannel($distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;
        return $this;
    }

    /**
     * Gets as range
     *
     * @return int
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Sets a new range
     *
     * @param int $range
     * @return self
     */
    public function setRange($range)
    {
        $this->range = $range;
        return $this;
    }

    /**
     * Gets as transportType
     *
     * @return int
     */
    public function getTransportType()
    {
        return $this->transportType;
    }

    /**
     * Sets a new transportType
     *
     * @param int $transportType
     * @return self
     */
    public function setTransportType($transportType)
    {
        $this->transportType = $transportType;
        return $this;
    }


}

