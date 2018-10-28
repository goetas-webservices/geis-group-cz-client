<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing AssignRange
 */
class AssignRange
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfRangeRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfRangeRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfRangeRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfRangeRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

