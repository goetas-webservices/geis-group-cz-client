<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing InsertOrderResponse
 */
class InsertOrderResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfOrderRequestOrderpMtQ0fwNType $insertOrderResult
     */
    private $insertOrderResult = null;

    /**
     * Gets as insertOrderResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfOrderRequestOrderpMtQ0fwNType
     */
    public function getInsertOrderResult()
    {
        return $this->insertOrderResult;
    }

    /**
     * Sets a new insertOrderResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfOrderRequestOrderpMtQ0fwNType $insertOrderResult
     * @return self
     */
    public function setInsertOrderResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfOrderRequestOrderpMtQ0fwNType $insertOrderResult)
    {
        $this->insertOrderResult = $insertOrderResult;
        return $this;
    }


}

