<?php

namespace GoetasWebservices\Client\GeisGrouCz\SoapEnvelope\Messages;

/**
 * Class representing AddServiceListOutput
 */
class AddServiceListOutput
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\SoapParts\AddServiceListOutput $body
     */
    private $body = null;

    /**
     * @property \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\SoapParts\AddServiceListOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\SoapParts\AddServiceListOutput $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\GeisGrouCz\SoapParts\AddServiceListOutput $body)
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

