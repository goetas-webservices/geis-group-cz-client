<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing WrapListResponse
 */
class WrapListResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfWrapRequestArrayOfWrappMtQ0fwNType $wrapListResult
     */
    private $wrapListResult = null;

    /**
     * Gets as wrapListResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfWrapRequestArrayOfWrappMtQ0fwNType
     */
    public function getWrapListResult()
    {
        return $this->wrapListResult;
    }

    /**
     * Sets a new wrapListResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfWrapRequestArrayOfWrappMtQ0fwNType $wrapListResult
     * @return self
     */
    public function setWrapListResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfWrapRequestArrayOfWrappMtQ0fwNType $wrapListResult)
    {
        $this->wrapListResult = $wrapListResult;
        return $this;
    }


}

