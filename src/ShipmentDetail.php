<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing ShipmentDetail
 */
class ShipmentDetail
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfShipmentReqeustHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfShipmentReqeustHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfShipmentReqeustHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfShipmentReqeustHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

