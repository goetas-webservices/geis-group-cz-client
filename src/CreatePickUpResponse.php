<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing CreatePickUpResponse
 */
class CreatePickUpResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfPickUpRequestPickUppMtQ0fwNType $createPickUpResult
     */
    private $createPickUpResult = null;

    /**
     * Gets as createPickUpResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfPickUpRequestPickUppMtQ0fwNType
     */
    public function getCreatePickUpResult()
    {
        return $this->createPickUpResult;
    }

    /**
     * Sets a new createPickUpResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfPickUpRequestPickUppMtQ0fwNType $createPickUpResult
     * @return self
     */
    public function setCreatePickUpResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfPickUpRequestPickUppMtQ0fwNType $createPickUpResult)
    {
        $this->createPickUpResult = $createPickUpResult;
        return $this;
    }


}

