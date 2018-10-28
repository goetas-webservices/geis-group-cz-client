<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing GetLabelResponse
 */
class GetLabelResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfLabelRequestLabelResponsepMtQ0fwNType $getLabelResult
     */
    private $getLabelResult = null;

    /**
     * Gets as getLabelResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfLabelRequestLabelResponsepMtQ0fwNType
     */
    public function getGetLabelResult()
    {
        return $this->getLabelResult;
    }

    /**
     * Sets a new getLabelResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfLabelRequestLabelResponsepMtQ0fwNType $getLabelResult
     * @return self
     */
    public function setGetLabelResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfLabelRequestLabelResponsepMtQ0fwNType $getLabelResult)
    {
        $this->getLabelResult = $getLabelResult;
        return $this;
    }


}

