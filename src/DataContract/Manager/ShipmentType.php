<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ShipmentType
 *
 *
 * XSD Type: Shipment
 */
class ShipmentType
{

    /**
     * @property \DateTime $borderDate
     */
    private $borderDate = null;

    /**
     * @property string $codValue
     */
    private $codValue = null;

    /**
     * @property string $codVarCode
     */
    private $codVarCode = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ColliHistoryType[] $colliHistory
     */
    private $colliHistory = null;

    /**
     * @property \DateTime $delivDate
     */
    private $delivDate = null;

    /**
     * @property string $delivPerson
     */
    private $delivPerson = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageHistoryType[] $history
     */
    private $history = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddressType $recAddress
     */
    private $recAddress = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageRowType[] $rows
     */
    private $rows = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddressType $sendAddress
     */
    private $sendAddress = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageServiceType[] $services
     */
    private $services = null;

    /**
     * @property string $shipmentNumber
     */
    private $shipmentNumber = null;

    /**
     * @property string $shipmentNumberCust
     */
    private $shipmentNumberCust = null;

    /**
     * @property string $volume
     */
    private $volume = null;

    /**
     * @property float $weight
     */
    private $weight = null;

    /**
     * Gets as borderDate
     *
     * @return \DateTime
     */
    public function getBorderDate()
    {
        return $this->borderDate;
    }

    /**
     * Sets a new borderDate
     *
     * @param \DateTime $borderDate
     * @return self
     */
    public function setBorderDate(\DateTime $borderDate)
    {
        $this->borderDate = $borderDate;
        return $this;
    }

    /**
     * Gets as codValue
     *
     * @return string
     */
    public function getCodValue()
    {
        return $this->codValue;
    }

    /**
     * Sets a new codValue
     *
     * @param string $codValue
     * @return self
     */
    public function setCodValue($codValue)
    {
        $this->codValue = $codValue;
        return $this;
    }

    /**
     * Gets as codVarCode
     *
     * @return string
     */
    public function getCodVarCode()
    {
        return $this->codVarCode;
    }

    /**
     * Sets a new codVarCode
     *
     * @param string $codVarCode
     * @return self
     */
    public function setCodVarCode($codVarCode)
    {
        $this->codVarCode = $codVarCode;
        return $this;
    }

    /**
     * Adds as colliHistory
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ColliHistoryType $colliHistory
     */
    public function addToColliHistory(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ColliHistoryType $colliHistory)
    {
        $this->colliHistory[] = $colliHistory;
        return $this;
    }

    /**
     * isset colliHistory
     *
     * @param int|string $index
     * @return bool
     */
    public function issetColliHistory($index)
    {
        return isset($this->colliHistory[$index]);
    }

    /**
     * unset colliHistory
     *
     * @param int|string $index
     * @return void
     */
    public function unsetColliHistory($index)
    {
        unset($this->colliHistory[$index]);
    }

    /**
     * Gets as colliHistory
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ColliHistoryType[]
     */
    public function getColliHistory()
    {
        return $this->colliHistory;
    }

    /**
     * Sets a new colliHistory
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ColliHistoryType[] $colliHistory
     * @return self
     */
    public function setColliHistory(array $colliHistory)
    {
        $this->colliHistory = $colliHistory;
        return $this;
    }

    /**
     * Gets as delivDate
     *
     * @return \DateTime
     */
    public function getDelivDate()
    {
        return $this->delivDate;
    }

    /**
     * Sets a new delivDate
     *
     * @param \DateTime $delivDate
     * @return self
     */
    public function setDelivDate(\DateTime $delivDate)
    {
        $this->delivDate = $delivDate;
        return $this;
    }

    /**
     * Gets as delivPerson
     *
     * @return string
     */
    public function getDelivPerson()
    {
        return $this->delivPerson;
    }

    /**
     * Sets a new delivPerson
     *
     * @param string $delivPerson
     * @return self
     */
    public function setDelivPerson($delivPerson)
    {
        $this->delivPerson = $delivPerson;
        return $this;
    }

    /**
     * Adds as packageHistory
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageHistoryType $packageHistory
     */
    public function addToHistory(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageHistoryType $packageHistory)
    {
        $this->history[] = $packageHistory;
        return $this;
    }

    /**
     * isset history
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHistory($index)
    {
        return isset($this->history[$index]);
    }

    /**
     * unset history
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHistory($index)
    {
        unset($this->history[$index]);
    }

    /**
     * Gets as history
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageHistoryType[]
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Sets a new history
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageHistoryType[] $history
     * @return self
     */
    public function setHistory(array $history)
    {
        $this->history = $history;
        return $this;
    }

    /**
     * Gets as recAddress
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddressType
     */
    public function getRecAddress()
    {
        return $this->recAddress;
    }

    /**
     * Sets a new recAddress
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddressType $recAddress
     * @return self
     */
    public function setRecAddress(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddressType $recAddress)
    {
        $this->recAddress = $recAddress;
        return $this;
    }

    /**
     * Adds as packageRow
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageRowType $packageRow
     */
    public function addToRows(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageRowType $packageRow)
    {
        $this->rows[] = $packageRow;
        return $this;
    }

    /**
     * isset rows
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRows($index)
    {
        return isset($this->rows[$index]);
    }

    /**
     * unset rows
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRows($index)
    {
        unset($this->rows[$index]);
    }

    /**
     * Gets as rows
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageRowType[]
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Sets a new rows
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageRowType[] $rows
     * @return self
     */
    public function setRows(array $rows)
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * Gets as sendAddress
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddressType
     */
    public function getSendAddress()
    {
        return $this->sendAddress;
    }

    /**
     * Sets a new sendAddress
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddressType $sendAddress
     * @return self
     */
    public function setSendAddress(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\AddressType $sendAddress)
    {
        $this->sendAddress = $sendAddress;
        return $this;
    }

    /**
     * Adds as packageService
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageServiceType $packageService
     */
    public function addToServices(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageServiceType $packageService)
    {
        $this->services[] = $packageService;
        return $this;
    }

    /**
     * isset services
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServices($index)
    {
        return isset($this->services[$index]);
    }

    /**
     * unset services
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServices($index)
    {
        unset($this->services[$index]);
    }

    /**
     * Gets as services
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageServiceType[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets a new services
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\PackageServiceType[] $services
     * @return self
     */
    public function setServices(array $services)
    {
        $this->services = $services;
        return $this;
    }

    /**
     * Gets as shipmentNumber
     *
     * @return string
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }

    /**
     * Sets a new shipmentNumber
     *
     * @param string $shipmentNumber
     * @return self
     */
    public function setShipmentNumber($shipmentNumber)
    {
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }

    /**
     * Gets as shipmentNumberCust
     *
     * @return string
     */
    public function getShipmentNumberCust()
    {
        return $this->shipmentNumberCust;
    }

    /**
     * Sets a new shipmentNumberCust
     *
     * @param string $shipmentNumberCust
     * @return self
     */
    public function setShipmentNumberCust($shipmentNumberCust)
    {
        $this->shipmentNumberCust = $shipmentNumberCust;
        return $this;
    }

    /**
     * Gets as volume
     *
     * @return string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Sets a new volume
     *
     * @param string $volume
     * @return self
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * Gets as weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param float $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }


}

