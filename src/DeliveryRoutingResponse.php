<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing DeliveryRoutingResponse
 */
class DeliveryRoutingResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfDeliveryRoutingRequestDeliveryRoutingpMtQ0fwNType $deliveryRoutingResult
     */
    private $deliveryRoutingResult = null;

    /**
     * Gets as deliveryRoutingResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfDeliveryRoutingRequestDeliveryRoutingpMtQ0fwNType
     */
    public function getDeliveryRoutingResult()
    {
        return $this->deliveryRoutingResult;
    }

    /**
     * Sets a new deliveryRoutingResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfDeliveryRoutingRequestDeliveryRoutingpMtQ0fwNType $deliveryRoutingResult
     * @return self
     */
    public function setDeliveryRoutingResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfDeliveryRoutingRequestDeliveryRoutingpMtQ0fwNType $deliveryRoutingResult)
    {
        $this->deliveryRoutingResult = $deliveryRoutingResult;
        return $this;
    }


}

