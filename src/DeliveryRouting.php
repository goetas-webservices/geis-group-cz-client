<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing DeliveryRouting
 */
class DeliveryRouting
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfDeliveryRoutingRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfDeliveryRoutingRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfDeliveryRoutingRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfDeliveryRoutingRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

