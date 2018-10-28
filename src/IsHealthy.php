<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing IsHealthy
 */
class IsHealthy
{

    /**
     * @property string $adminToken
     */
    private $adminToken = null;

    /**
     * Gets as adminToken
     *
     * @return string
     */
    public function getAdminToken()
    {
        return $this->adminToken;
    }

    /**
     * Sets a new adminToken
     *
     * @param string $adminToken
     * @return self
     */
    public function setAdminToken($adminToken)
    {
        $this->adminToken = $adminToken;
        return $this;
    }


}

