<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing WrapList
 */
class WrapList
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfWrapRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfWrapRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfWrapRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfWrapRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

