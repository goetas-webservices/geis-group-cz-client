<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing AddServiceRequestType
 *
 *
 * XSD Type: AddServiceRequest
 */
class AddServiceRequestType extends RequestObjectBaseType
{

    /**
     * @property string $deliveryCountry
     */
    private $deliveryCountry = null;

    /**
     * @property string $service
     */
    private $service = null;

    /**
     * Gets as deliveryCountry
     *
     * @return string
     */
    public function getDeliveryCountry()
    {
        return $this->deliveryCountry;
    }

    /**
     * Sets a new deliveryCountry
     *
     * @param string $deliveryCountry
     * @return self
     */
    public function setDeliveryCountry($deliveryCountry)
    {
        $this->deliveryCountry = $deliveryCountry;
        return $this;
    }

    /**
     * Gets as service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param string $service
     * @return self
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }


}

