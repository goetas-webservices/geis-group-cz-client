<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing PickupListResponseType
 *
 *
 * XSD Type: PickupListResponse
 */
class PickupListResponseType
{

    /**
     * @property mixed $pickupListData
     */
    private $pickupListData = null;

    /**
     * Gets as pickupListData
     *
     * @return mixed
     */
    public function getPickupListData()
    {
        return $this->pickupListData;
    }

    /**
     * Sets a new pickupListData
     *
     * @param mixed $pickupListData
     * @return self
     */
    public function setPickupListData($pickupListData)
    {
        $this->pickupListData = $pickupListData;
        return $this;
    }


}

