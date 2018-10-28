<?php

namespace GoetasWebservices\Client\GeisGrouCz;

/**
 * Class representing AssignRangeResponse
 */
class AssignRangeResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfRangeRequestRangepMtQ0fwNType $assignRangeResult
     */
    private $assignRangeResult = null;

    /**
     * Gets as assignRangeResult
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfRangeRequestRangepMtQ0fwNType
     */
    public function getAssignRangeResult()
    {
        return $this->assignRangeResult;
    }

    /**
     * Sets a new assignRangeResult
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfRangeRequestRangepMtQ0fwNType $assignRangeResult
     * @return self
     */
    public function setAssignRangeResult(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ResponseOfRangeRequestRangepMtQ0fwNType $assignRangeResult)
    {
        $this->assignRangeResult = $assignRangeResult;
        return $this;
    }


}

