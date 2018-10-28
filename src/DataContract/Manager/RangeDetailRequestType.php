<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing RangeDetailRequestType
 *
 *
 * XSD Type: RangeDetailRequest
 */
class RangeDetailRequestType extends RequestObjectBaseType
{

    /**
     * @property int $distributionChannel
     */
    private $distributionChannel = null;

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

