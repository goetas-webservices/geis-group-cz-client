<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing StatusRequestType
 *
 *
 * XSD Type: StatusRequest
 */
class StatusRequestType extends RequestObjectBaseType
{

    /**
     * @property int $distributionChannel
     */
    private $distributionChannel = null;

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


}

