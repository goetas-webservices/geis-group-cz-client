<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing RequestOfShipmentReqeustHUsxwOXqType
 *
 *
 * XSD Type: RequestOfShipmentReqeustHUsxwOXq
 */
class RequestOfShipmentReqeustHUsxwOXqType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestHeaderType $header
     */
    private $header = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentReqeustType $requestObject
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
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentReqeustType
     */
    public function getRequestObject()
    {
        return $this->requestObject;
    }

    /**
     * Sets a new requestObject
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentReqeustType $requestObject
     * @return self
     */
    public function setRequestObject(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ShipmentReqeustType $requestObject)
    {
        $this->requestObject = $requestObject;
        return $this;
    }


}

