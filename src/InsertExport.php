<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing InsertExport
 */
class InsertExport
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfExportRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfExportRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfExportRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfExportRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

