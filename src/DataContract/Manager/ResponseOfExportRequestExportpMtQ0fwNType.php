<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ResponseOfExportRequestExportpMtQ0fwNType
 *
 *
 * XSD Type: ResponseOfExportRequestExportpMtQ0fwN
 */
class ResponseOfExportRequestExportpMtQ0fwNType
{

    /**
     * @property string $errorCode
     */
    private $errorCode = null;

    /**
     * @property string $errorMessage
     */
    private $errorMessage = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfExportRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportType $responseObject
     */
    private $responseObject = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * Gets as errorCode
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Sets a new errorCode
     *
     * @param string $errorCode
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * Gets as errorMessage
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfExportRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfExportRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfExportRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as responseObject
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportType
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }

    /**
     * Sets a new responseObject
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportType $responseObject
     * @return self
     */
    public function setResponseObject(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportType $responseObject)
    {
        $this->responseObject = $responseObject;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


}

