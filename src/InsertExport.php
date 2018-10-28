<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing InsertExport
 */
class InsertExport
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfExportRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfExportRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfExportRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfExportRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

