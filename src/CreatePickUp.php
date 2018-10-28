<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing CreatePickUp
 */
class CreatePickUp
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfPickUpRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfPickUpRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfPickUpRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfPickUpRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

