<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing ShipmentStatus
 */
class ShipmentStatus
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfShipmentStatusRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfShipmentStatusRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfShipmentStatusRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfShipmentStatusRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

