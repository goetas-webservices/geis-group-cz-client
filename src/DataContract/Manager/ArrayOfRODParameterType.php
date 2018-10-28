<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ArrayOfRODParameterType
 *
 *
 * XSD Type: ArrayOfRODParameter
 */
class ArrayOfRODParameterType
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RODParameterType[] $rODParameter
     */
    private $rODParameter = [
        
    ];

    /**
     * Adds as rODParameter
     *
     * @return self
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RODParameterType $rODParameter
     */
    public function addToRODParameter(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RODParameterType $rODParameter)
    {
        $this->rODParameter[] = $rODParameter;
        return $this;
    }

    /**
     * isset rODParameter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRODParameter($index)
    {
        return isset($this->rODParameter[$index]);
    }

    /**
     * unset rODParameter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRODParameter($index)
    {
        unset($this->rODParameter[$index]);
    }

    /**
     * Gets as rODParameter
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RODParameterType[]
     */
    public function getRODParameter()
    {
        return $this->rODParameter;
    }

    /**
     * Sets a new rODParameter
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RODParameterType[] $rODParameter
     * @return self
     */
    public function setRODParameter(array $rODParameter)
    {
        $this->rODParameter = $rODParameter;
        return $this;
    }


}

