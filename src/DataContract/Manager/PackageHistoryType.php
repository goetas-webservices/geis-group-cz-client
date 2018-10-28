<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing PackageHistoryType
 *
 *
 * XSD Type: PackageHistory
 */
class PackageHistoryType
{

    /**
     * @property string $depName
     */
    private $depName = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $statusCode
     */
    private $statusCode = null;

    /**
     * @property \DateTime $statusDate
     */
    private $statusDate = null;

    /**
     * @property string $statusName
     */
    private $statusName = null;

    /**
     * Gets as depName
     *
     * @return string
     */
    public function getDepName()
    {
        return $this->depName;
    }

    /**
     * Sets a new depName
     *
     * @param string $depName
     * @return self
     */
    public function setDepName($depName)
    {
        $this->depName = $depName;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as statusCode
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Gets as statusDate
     *
     * @return \DateTime
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Sets a new statusDate
     *
     * @param \DateTime $statusDate
     * @return self
     */
    public function setStatusDate(\DateTime $statusDate)
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * Gets as statusName
     *
     * @return string
     */
    public function getStatusName()
    {
        return $this->statusName;
    }

    /**
     * Sets a new statusName
     *
     * @param string $statusName
     * @return self
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;
        return $this;
    }


}

