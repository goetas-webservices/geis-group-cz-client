<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing GetPickupListResponse
 */
class GetPickupListResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfPickupListRequestPickupListResponsepMtQ0fwNType $getPickupListResult
     */
    private $getPickupListResult = null;

    /**
     * Gets as getPickupListResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfPickupListRequestPickupListResponsepMtQ0fwNType
     */
    public function getGetPickupListResult()
    {
        return $this->getPickupListResult;
    }

    /**
     * Sets a new getPickupListResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfPickupListRequestPickupListResponsepMtQ0fwNType $getPickupListResult
     * @return self
     */
    public function setGetPickupListResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfPickupListRequestPickupListResponsepMtQ0fwNType $getPickupListResult)
    {
        $this->getPickupListResult = $getPickupListResult;
        return $this;
    }


}

