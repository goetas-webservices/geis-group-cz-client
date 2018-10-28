<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing GetPickupList
 */
class GetPickupList
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfPickupListRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfPickupListRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfPickupListRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfPickupListRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

