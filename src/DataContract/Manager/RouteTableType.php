<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing RouteTableType
 *
 *
 * XSD Type: RouteTable
 */
class RouteTableType
{

    /**
     * @property string $country
     */
    private $country = null;

    /**
     * @property string $depot
     */
    private $depot = null;

    /**
     * @property int $distributionChannel
     */
    private $distributionChannel = null;

    /**
     * @property string $route
     */
    private $route = null;

    /**
     * @property \DateTime $validDate
     */
    private $validDate = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ZipCodesType $zipCodes
     */
    private $zipCodes = null;

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as depot
     *
     * @return string
     */
    public function getDepot()
    {
        return $this->depot;
    }

    /**
     * Sets a new depot
     *
     * @param string $depot
     * @return self
     */
    public function setDepot($depot)
    {
        $this->depot = $depot;
        return $this;
    }

    /**
     * Gets as distributionChannel
     *
     * @return int
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel;
    }

    /**
     * Sets a new distributionChannel
     *
     * @param int $distributionChannel
     * @return self
     */
    public function setDistributionChannel($distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;
        return $this;
    }

    /**
     * Gets as route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Sets a new route
     *
     * @param string $route
     * @return self
     */
    public function setRoute($route)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * Gets as validDate
     *
     * @return \DateTime
     */
    public function getValidDate()
    {
        return $this->validDate;
    }

    /**
     * Sets a new validDate
     *
     * @param \DateTime $validDate
     * @return self
     */
    public function setValidDate(\DateTime $validDate)
    {
        $this->validDate = $validDate;
        return $this;
    }

    /**
     * Gets as zipCodes
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ZipCodesType
     */
    public function getZipCodes()
    {
        return $this->zipCodes;
    }

    /**
     * Sets a new zipCodes
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ZipCodesType $zipCodes
     * @return self
     */
    public function setZipCodes(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ZipCodesType $zipCodes)
    {
        $this->zipCodes = $zipCodes;
        return $this;
    }


}

