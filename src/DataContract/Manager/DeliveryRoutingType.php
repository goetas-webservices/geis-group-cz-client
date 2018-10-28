<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing DeliveryRoutingType
 *
 *
 * XSD Type: DeliveryRouting
 */
class DeliveryRoutingType
{

    /**
     * @property string $deliveryRoute
     */
    private $deliveryRoute = null;

    /**
     * @property string $depCode
     */
    private $depCode = null;

    /**
     * Gets as deliveryRoute
     *
     * @return string
     */
    public function getDeliveryRoute()
    {
        return $this->deliveryRoute;
    }

    /**
     * Sets a new deliveryRoute
     *
     * @param string $deliveryRoute
     * @return self
     */
    public function setDeliveryRoute($deliveryRoute)
    {
        $this->deliveryRoute = $deliveryRoute;
        return $this;
    }

    /**
     * Gets as depCode
     *
     * @return string
     */
    public function getDepCode()
    {
        return $this->depCode;
    }

    /**
     * Sets a new depCode
     *
     * @param string $depCode
     * @return self
     */
    public function setDepCode($depCode)
    {
        $this->depCode = $depCode;
        return $this;
    }


}

