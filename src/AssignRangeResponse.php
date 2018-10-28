<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing AssignRangeResponse
 */
class AssignRangeResponse
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfRangeRequestRangepMtQ0fwNType $assignRangeResult
     */
    private $assignRangeResult = null;

    /**
     * Gets as assignRangeResult
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfRangeRequestRangepMtQ0fwNType
     */
    public function getAssignRangeResult()
    {
        return $this->assignRangeResult;
    }

    /**
     * Sets a new assignRangeResult
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfRangeRequestRangepMtQ0fwNType $assignRangeResult
     * @return self
     */
    public function setAssignRangeResult(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ResponseOfRangeRequestRangepMtQ0fwNType $assignRangeResult)
    {
        $this->assignRangeResult = $assignRangeResult;
        return $this;
    }


}

