<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing RouteTableRequestType
 *
 *
 * XSD Type: RouteTableRequest
 */
class RouteTableRequestType extends RequestObjectBaseType
{

    /**
     * @property int $distributionChannel
     */
    private $distributionChannel = null;

    /**
     * @property \DateTime $validDate
     */
    private $validDate = null;

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
     * Gets as validDate
     *
     * @return \DateTime
     */
    public function getValidDate()
    {
        return $this->validDate;
    }

    /**
     * Sets a new validDate
     *
     * @param \DateTime $validDate
     * @return self
     */
    public function setValidDate(\DateTime $validDate)
    {
        $this->validDate = $validDate;
        return $this;
    }


}

