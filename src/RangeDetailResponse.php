<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing RangeDetailResponse
 */
class RangeDetailResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfRangeDetailRequestRangeDetailResponsepMtQ0fwNType $rangeDetailResult
     */
    private $rangeDetailResult = null;

    /**
     * Gets as rangeDetailResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfRangeDetailRequestRangeDetailResponsepMtQ0fwNType
     */
    public function getRangeDetailResult()
    {
        return $this->rangeDetailResult;
    }

    /**
     * Sets a new rangeDetailResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfRangeDetailRequestRangeDetailResponsepMtQ0fwNType $rangeDetailResult
     * @return self
     */
    public function setRangeDetailResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfRangeDetailRequestRangeDetailResponsepMtQ0fwNType $rangeDetailResult)
    {
        $this->rangeDetailResult = $rangeDetailResult;
        return $this;
    }


}

