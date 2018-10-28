<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ResponseOfWrapRequestArrayOfWrappMtQ0fwNType
 *
 *
 * XSD Type: ResponseOfWrapRequestArrayOfWrappMtQ0fwN
 */
class ResponseOfWrapRequestArrayOfWrappMtQ0fwNType
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
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfWrapRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\WrapType[] $responseObject
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
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfWrapRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfWrapRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfWrapRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Adds as wrap
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\WrapType $wrap
     */
    public function addToResponseObject(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\WrapType $wrap)
    {
        $this->responseObject[] = $wrap;
        return $this;
    }

    /**
     * isset responseObject
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponseObject($index)
    {
        return isset($this->responseObject[$index]);
    }

    /**
     * unset responseObject
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponseObject($index)
    {
        unset($this->responseObject[$index]);
    }

    /**
     * Gets as responseObject
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\WrapType[]
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }

    /**
     * Sets a new responseObject
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\WrapType[] $responseObject
     * @return self
     */
    public function setResponseObject(array $responseObject)
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

