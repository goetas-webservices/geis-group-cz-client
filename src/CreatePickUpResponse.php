<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing CreatePickUpResponse
 */
class CreatePickUpResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfPickUpRequestPickUppMtQ0fwNType $createPickUpResult
     */
    private $createPickUpResult = null;

    /**
     * Gets as createPickUpResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfPickUpRequestPickUppMtQ0fwNType
     */
    public function getCreatePickUpResult()
    {
        return $this->createPickUpResult;
    }

    /**
     * Sets a new createPickUpResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfPickUpRequestPickUppMtQ0fwNType $createPickUpResult
     * @return self
     */
    public function setCreatePickUpResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfPickUpRequestPickUppMtQ0fwNType $createPickUpResult)
    {
        $this->createPickUpResult = $createPickUpResult;
        return $this;
    }


}

