<?php

namespace GoetasWebservices\Client\GeisGroupCz\SoapEnvelope\Messages;

/**
 * Class representing ListOfShipmentsOutput
 */
class ListOfShipmentsOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\SoapParts\ListOfShipmentsOutput $body
     */
    private $body = null;

    /**
     * @property \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\SoapParts\ListOfShipmentsOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\SoapParts\ListOfShipmentsOutput $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\GeisGroupCz\SoapParts\ListOfShipmentsOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     * @return self
     */
    public function setHeader(\GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header)
    {
        $this->header = $header;
        return $this;
    }


}

