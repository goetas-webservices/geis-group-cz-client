<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing OrderRequestType
 *
 *
 * XSD Type: OrderRequest
 */
class OrderRequestType extends RequestObjectBaseType
{

    /**
     * @property string $burstId
     */
    private $burstId = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\AddressType $deliveryAddress
     */
    private $deliveryAddress = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ContactType $deliveryContact
     */
    private $deliveryContact = null;

    /**
     * @property int $distributionChannel
     */
    private $distributionChannel = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportItemType[] $exportItems
     */
    private $exportItems = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportServiceType[] $exportServices
     */
    private $exportServices = null;

    /**
     * @property bool $mergedOrder
     */
    private $mergedOrder = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\MergedItemType[] $mergedOrders
     */
    private $mergedOrders = null;

    /**
     * @property string $note
     */
    private $note = null;

    /**
     * @property string $noteDriver
     */
    private $noteDriver = null;

    /**
     * @property string $partnerNumber
     */
    private $partnerNumber = null;

    /**
     * @property \DateTime $pickUpDate
     */
    private $pickUpDate = null;

    /**
     * @property string $reference
     */
    private $reference = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\AddressType $senderAddress
     */
    private $senderAddress = null;

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ContactType $senderContact
     */
    private $senderContact = null;

    /**
     * @property float $volume
     */
    private $volume = null;

    /**
     * @property float $weight
     */
    private $weight = null;

    /**
     * Gets as burstId
     *
     * @return string
     */
    public function getBurstId()
    {
        return $this->burstId;
    }

    /**
     * Sets a new burstId
     *
     * @param string $burstId
     * @return self
     */
    public function setBurstId($burstId)
    {
        $this->burstId = $burstId;
        return $this;
    }

    /**
     * Gets as deliveryAddress
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\AddressType
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Sets a new deliveryAddress
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\AddressType $deliveryAddress
     * @return self
     */
    public function setDeliveryAddress(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\AddressType $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * Gets as deliveryContact
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ContactType
     */
    public function getDeliveryContact()
    {
        return $this->deliveryContact;
    }

    /**
     * Sets a new deliveryContact
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ContactType $deliveryContact
     * @return self
     */
    public function setDeliveryContact(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ContactType $deliveryContact)
    {
        $this->deliveryContact = $deliveryContact;
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
     * Adds as exportItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportItemType $exportItem
     */
    public function addToExportItems(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportItemType $exportItem)
    {
        $this->exportItems[] = $exportItem;
        return $this;
    }

    /**
     * isset exportItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExportItems($index)
    {
        return isset($this->exportItems[$index]);
    }

    /**
     * unset exportItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExportItems($index)
    {
        unset($this->exportItems[$index]);
    }

    /**
     * Gets as exportItems
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportItemType[]
     */
    public function getExportItems()
    {
        return $this->exportItems;
    }

    /**
     * Sets a new exportItems
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportItemType[] $exportItems
     * @return self
     */
    public function setExportItems(array $exportItems)
    {
        $this->exportItems = $exportItems;
        return $this;
    }

    /**
     * Adds as exportService
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportServiceType $exportService
     */
    public function addToExportServices(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportServiceType $exportService)
    {
        $this->exportServices[] = $exportService;
        return $this;
    }

    /**
     * isset exportServices
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExportServices($index)
    {
        return isset($this->exportServices[$index]);
    }

    /**
     * unset exportServices
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExportServices($index)
    {
        unset($this->exportServices[$index]);
    }

    /**
     * Gets as exportServices
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportServiceType[]
     */
    public function getExportServices()
    {
        return $this->exportServices;
    }

    /**
     * Sets a new exportServices
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ExportServiceType[] $exportServices
     * @return self
     */
    public function setExportServices(array $exportServices)
    {
        $this->exportServices = $exportServices;
        return $this;
    }

    /**
     * Gets as mergedOrder
     *
     * @return bool
     */
    public function getMergedOrder()
    {
        return $this->mergedOrder;
    }

    /**
     * Sets a new mergedOrder
     *
     * @param bool $mergedOrder
     * @return self
     */
    public function setMergedOrder($mergedOrder)
    {
        $this->mergedOrder = $mergedOrder;
        return $this;
    }

    /**
     * Adds as mergedItem
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\MergedItemType $mergedItem
     */
    public function addToMergedOrders(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\MergedItemType $mergedItem)
    {
        $this->mergedOrders[] = $mergedItem;
        return $this;
    }

    /**
     * isset mergedOrders
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMergedOrders($index)
    {
        return isset($this->mergedOrders[$index]);
    }

    /**
     * unset mergedOrders
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMergedOrders($index)
    {
        unset($this->mergedOrders[$index]);
    }

    /**
     * Gets as mergedOrders
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\MergedItemType[]
     */
    public function getMergedOrders()
    {
        return $this->mergedOrders;
    }

    /**
     * Sets a new mergedOrders
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\MergedItemType[] $mergedOrders
     * @return self
     */
    public function setMergedOrders(array $mergedOrders)
    {
        $this->mergedOrders = $mergedOrders;
        return $this;
    }

    /**
     * Gets as note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as noteDriver
     *
     * @return string
     */
    public function getNoteDriver()
    {
        return $this->noteDriver;
    }

    /**
     * Sets a new noteDriver
     *
     * @param string $noteDriver
     * @return self
     */
    public function setNoteDriver($noteDriver)
    {
        $this->noteDriver = $noteDriver;
        return $this;
    }

    /**
     * Gets as partnerNumber
     *
     * @return string
     */
    public function getPartnerNumber()
    {
        return $this->partnerNumber;
    }

    /**
     * Sets a new partnerNumber
     *
     * @param string $partnerNumber
     * @return self
     */
    public function setPartnerNumber($partnerNumber)
    {
        $this->partnerNumber = $partnerNumber;
        return $this;
    }

    /**
     * Gets as pickUpDate
     *
     * @return \DateTime
     */
    public function getPickUpDate()
    {
        return $this->pickUpDate;
    }

    /**
     * Sets a new pickUpDate
     *
     * @param \DateTime $pickUpDate
     * @return self
     */
    public function setPickUpDate(\DateTime $pickUpDate)
    {
        $this->pickUpDate = $pickUpDate;
        return $this;
    }

    /**
     * Gets as reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param string $reference
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as senderAddress
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\AddressType
     */
    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    /**
     * Sets a new senderAddress
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\AddressType $senderAddress
     * @return self
     */
    public function setSenderAddress(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\AddressType $senderAddress)
    {
        $this->senderAddress = $senderAddress;
        return $this;
    }

    /**
     * Gets as senderContact
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ContactType
     */
    public function getSenderContact()
    {
        return $this->senderContact;
    }

    /**
     * Sets a new senderContact
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ContactType $senderContact
     * @return self
     */
    public function setSenderContact(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\ContactType $senderContact)
    {
        $this->senderContact = $senderContact;
        return $this;
    }

    /**
     * Gets as volume
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Sets a new volume
     *
     * @param float $volume
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

