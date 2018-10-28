<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing RequestOfExportRequestHUsxwOXqType
 *
 *
 * XSD Type: RequestOfExportRequestHUsxwOXq
 */
class RequestOfExportRequestHUsxwOXqType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestHeaderType $header
     */
    private $header = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportRequestType $requestObject
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
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportRequestType
     */
    public function getRequestObject()
    {
        return $this->requestObject;
    }

    /**
     * Sets a new requestObject
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportRequestType $requestObject
     * @return self
     */
    public function setRequestObject(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportRequestType $requestObject)
    {
        $this->requestObject = $requestObject;
        return $this;
    }


}

