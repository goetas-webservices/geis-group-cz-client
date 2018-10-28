<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing DeliveryRoutingResponse
 */
class DeliveryRoutingResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfDeliveryRoutingRequestDeliveryRoutingpMtQ0fwNType $deliveryRoutingResult
     */
    private $deliveryRoutingResult = null;

    /**
     * Gets as deliveryRoutingResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfDeliveryRoutingRequestDeliveryRoutingpMtQ0fwNType
     */
    public function getDeliveryRoutingResult()
    {
        return $this->deliveryRoutingResult;
    }

    /**
     * Sets a new deliveryRoutingResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfDeliveryRoutingRequestDeliveryRoutingpMtQ0fwNType $deliveryRoutingResult
     * @return self
     */
    public function setDeliveryRoutingResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfDeliveryRoutingRequestDeliveryRoutingpMtQ0fwNType $deliveryRoutingResult)
    {
        $this->deliveryRoutingResult = $deliveryRoutingResult;
        return $this;
    }


}

