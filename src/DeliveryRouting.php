<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing DeliveryRouting
 */
class DeliveryRouting
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfDeliveryRoutingRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfDeliveryRoutingRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfDeliveryRoutingRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfDeliveryRoutingRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

