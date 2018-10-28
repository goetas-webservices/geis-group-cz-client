<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ResponseOfShipmentRequestArrayOfShipmentResponsepMtQ0fwNType
 *
 *
 * XSD Type: ResponseOfShipmentRequestArrayOfShipmentResponsepMtQ0fwN
 */
class ResponseOfShipmentRequestArrayOfShipmentResponsepMtQ0fwNType
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
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfShipmentRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentResponseType[] $responseObject
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
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfShipmentRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfShipmentRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfShipmentRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Adds as shipmentResponse
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentResponseType $shipmentResponse
     */
    public function addToResponseObject(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentResponseType $shipmentResponse)
    {
        $this->responseObject[] = $shipmentResponse;
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
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentResponseType[]
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }

    /**
     * Sets a new responseObject
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentResponseType[] $responseObject
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

