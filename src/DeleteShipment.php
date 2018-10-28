<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing DeleteShipment
 */
class DeleteShipment
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfDeleteShipmentRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfDeleteShipmentRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfDeleteShipmentRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfDeleteShipmentRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

