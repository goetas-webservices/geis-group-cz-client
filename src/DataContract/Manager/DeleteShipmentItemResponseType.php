<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing DeleteShipmentItemResponseType
 *
 *
 * XSD Type: DeleteShipmentItemResponse
 */
class DeleteShipmentItemResponseType
{

    /**
     * @property string $errorMessage
     */
    private $errorMessage = null;

    /**
     * @property bool $isStorno
     */
    private $isStorno = null;

    /**
     * @property string $shipmentNumber
     */
    private $shipmentNumber = null;

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
     * Gets as isStorno
     *
     * @return bool
     */
    public function getIsStorno()
    {
        return $this->isStorno;
    }

    /**
     * Sets a new isStorno
     *
     * @param bool $isStorno
     * @return self
     */
    public function setIsStorno($isStorno)
    {
        $this->isStorno = $isStorno;
        return $this;
    }

    /**
     * Gets as shipmentNumber
     *
     * @return string
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }

    /**
     * Sets a new shipmentNumber
     *
     * @param string $shipmentNumber
     * @return self
     */
    public function setShipmentNumber($shipmentNumber)
    {
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }


}

