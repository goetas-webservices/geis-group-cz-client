<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing GetPickupListResponse
 */
class GetPickupListResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfPickupListRequestPickupListResponsepMtQ0fwNType $getPickupListResult
     */
    private $getPickupListResult = null;

    /**
     * Gets as getPickupListResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfPickupListRequestPickupListResponsepMtQ0fwNType
     */
    public function getGetPickupListResult()
    {
        return $this->getPickupListResult;
    }

    /**
     * Sets a new getPickupListResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfPickupListRequestPickupListResponsepMtQ0fwNType $getPickupListResult
     * @return self
     */
    public function setGetPickupListResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfPickupListRequestPickupListResponsepMtQ0fwNType $getPickupListResult)
    {
        $this->getPickupListResult = $getPickupListResult;
        return $this;
    }


}

