<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ExportServiceType
 *
 *
 * XSD Type: ExportService
 */
class ExportServiceType
{

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $parameter1
     */
    private $parameter1 = null;

    /**
     * @property string $parameter2
     */
    private $parameter2 = null;

    /**
     * @property string $parameter3
     */
    private $parameter3 = null;

    /**
     * @property string $parameter4
     */
    private $parameter4 = null;

    /**
     * @property string $parameter5
     */
    private $parameter5 = null;

    /**
     * @property string $parameter6
     */
    private $parameter6 = null;

    /**
     * @property string $parameter7
     */
    private $parameter7 = null;

    /**
     * @property string $parameter8
     */
    private $parameter8 = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RODParameterType[] $rODParameters
     */
    private $rODParameters = null;

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as parameter1
     *
     * @return string
     */
    public function getParameter1()
    {
        return $this->parameter1;
    }

    /**
     * Sets a new parameter1
     *
     * @param string $parameter1
     * @return self
     */
    public function setParameter1($parameter1)
    {
        $this->parameter1 = $parameter1;
        return $this;
    }

    /**
     * Gets as parameter2
     *
     * @return string
     */
    public function getParameter2()
    {
        return $this->parameter2;
    }

    /**
     * Sets a new parameter2
     *
     * @param string $parameter2
     * @return self
     */
    public function setParameter2($parameter2)
    {
        $this->parameter2 = $parameter2;
        return $this;
    }

    /**
     * Gets as parameter3
     *
     * @return string
     */
    public function getParameter3()
    {
        return $this->parameter3;
    }

    /**
     * Sets a new parameter3
     *
     * @param string $parameter3
     * @return self
     */
    public function setParameter3($parameter3)
    {
        $this->parameter3 = $parameter3;
        return $this;
    }

    /**
     * Gets as parameter4
     *
     * @return string
     */
    public function getParameter4()
    {
        return $this->parameter4;
    }

    /**
     * Sets a new parameter4
     *
     * @param string $parameter4
     * @return self
     */
    public function setParameter4($parameter4)
    {
        $this->parameter4 = $parameter4;
        return $this;
    }

    /**
     * Gets as parameter5
     *
     * @return string
     */
    public function getParameter5()
    {
        return $this->parameter5;
    }

    /**
     * Sets a new parameter5
     *
     * @param string $parameter5
     * @return self
     */
    public function setParameter5($parameter5)
    {
        $this->parameter5 = $parameter5;
        return $this;
    }

    /**
     * Gets as parameter6
     *
     * @return string
     */
    public function getParameter6()
    {
        return $this->parameter6;
    }

    /**
     * Sets a new parameter6
     *
     * @param string $parameter6
     * @return self
     */
    public function setParameter6($parameter6)
    {
        $this->parameter6 = $parameter6;
        return $this;
    }

    /**
     * Gets as parameter7
     *
     * @return string
     */
    public function getParameter7()
    {
        return $this->parameter7;
    }

    /**
     * Sets a new parameter7
     *
     * @param string $parameter7
     * @return self
     */
    public function setParameter7($parameter7)
    {
        $this->parameter7 = $parameter7;
        return $this;
    }

    /**
     * Gets as parameter8
     *
     * @return string
     */
    public function getParameter8()
    {
        return $this->parameter8;
    }

    /**
     * Sets a new parameter8
     *
     * @param string $parameter8
     * @return self
     */
    public function setParameter8($parameter8)
    {
        $this->parameter8 = $parameter8;
        return $this;
    }

    /**
     * Adds as rODParameter
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RODParameterType $rODParameter
     */
    public function addToRODParameters(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RODParameterType $rODParameter)
    {
        $this->rODParameters[] = $rODParameter;
        return $this;
    }

    /**
     * isset rODParameters
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRODParameters($index)
    {
        return isset($this->rODParameters[$index]);
    }

    /**
     * unset rODParameters
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRODParameters($index)
    {
        unset($this->rODParameters[$index]);
    }

    /**
     * Gets as rODParameters
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RODParameterType[]
     */
    public function getRODParameters()
    {
        return $this->rODParameters;
    }

    /**
     * Sets a new rODParameters
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RODParameterType[] $rODParameters
     * @return self
     */
    public function setRODParameters(array $rODParameters)
    {
        $this->rODParameters = $rODParameters;
        return $this;
    }


}

