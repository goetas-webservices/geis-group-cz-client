<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing DeliveryRoutingRequestType
 *
 *
 * XSD Type: DeliveryRoutingRequest
 */
class DeliveryRoutingRequestType extends RequestObjectBaseType
{

    /**
     * @property string $countryIn
     */
    private $countryIn = null;

    /**
     * @property string $countryOut
     */
    private $countryOut = null;

    /**
     * @property int $distributionChannel
     */
    private $distributionChannel = null;

    /**
     * @property string $temperatureMode
     */
    private $temperatureMode = null;

    /**
     * @property string $zipCodeIn
     */
    private $zipCodeIn = null;

    /**
     * @property string $zipCodeOut
     */
    private $zipCodeOut = null;

    /**
     * Gets as countryIn
     *
     * @return string
     */
    public function getCountryIn()
    {
        return $this->countryIn;
    }

    /**
     * Sets a new countryIn
     *
     * @param string $countryIn
     * @return self
     */
    public function setCountryIn($countryIn)
    {
        $this->countryIn = $countryIn;
        return $this;
    }

    /**
     * Gets as countryOut
     *
     * @return string
     */
    public function getCountryOut()
    {
        return $this->countryOut;
    }

    /**
     * Sets a new countryOut
     *
     * @param string $countryOut
     * @return self
     */
    public function setCountryOut($countryOut)
    {
        $this->countryOut = $countryOut;
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
     * Gets as temperatureMode
     *
     * @return string
     */
    public function getTemperatureMode()
    {
        return $this->temperatureMode;
    }

    /**
     * Sets a new temperatureMode
     *
     * @param string $temperatureMode
     * @return self
     */
    public function setTemperatureMode($temperatureMode)
    {
        $this->temperatureMode = $temperatureMode;
        return $this;
    }

    /**
     * Gets as zipCodeIn
     *
     * @return string
     */
    public function getZipCodeIn()
    {
        return $this->zipCodeIn;
    }

    /**
     * Sets a new zipCodeIn
     *
     * @param string $zipCodeIn
     * @return self
     */
    public function setZipCodeIn($zipCodeIn)
    {
        $this->zipCodeIn = $zipCodeIn;
        return $this;
    }

    /**
     * Gets as zipCodeOut
     *
     * @return string
     */
    public function getZipCodeOut()
    {
        return $this->zipCodeOut;
    }

    /**
     * Sets a new zipCodeOut
     *
     * @param string $zipCodeOut
     * @return self
     */
    public function setZipCodeOut($zipCodeOut)
    {
        $this->zipCodeOut = $zipCodeOut;
        return $this;
    }


}

