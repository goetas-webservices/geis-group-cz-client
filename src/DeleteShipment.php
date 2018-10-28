<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing DeleteShipment
 */
class DeleteShipment
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfDeleteShipmentRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfDeleteShipmentRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfDeleteShipmentRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfDeleteShipmentRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

