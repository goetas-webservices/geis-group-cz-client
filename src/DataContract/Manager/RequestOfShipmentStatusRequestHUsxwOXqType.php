<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing RequestOfShipmentStatusRequestHUsxwOXqType
 *
 *
 * XSD Type: RequestOfShipmentStatusRequestHUsxwOXq
 */
class RequestOfShipmentStatusRequestHUsxwOXqType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestHeaderType $header
     */
    private $header = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusRequestType $requestObject
     */
    private $requestObject = null;

    /**
     * Gets as header
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestHeaderType
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestHeaderType $header
     * @return self
     */
    public function setHeader(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestHeaderType $header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * Gets as requestObject
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusRequestType
     */
    public function getRequestObject()
    {
        return $this->requestObject;
    }

    /**
     * Sets a new requestObject
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusRequestType $requestObject
     * @return self
     */
    public function setRequestObject(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentStatusRequestType $requestObject)
    {
        $this->requestObject = $requestObject;
        return $this;
    }


}

