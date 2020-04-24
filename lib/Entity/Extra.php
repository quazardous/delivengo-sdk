<?php

namespace DelivengoSDK\Entity;

/**
 * Class Extra
 * @package DelivengoSDK\Entity
 */
class Extra extends Entity
{
    /** @var Paiement $paiement */
    protected $paiement;

    /** @var Module $module */
    protected $module;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'paiement' => $this->getPaiement(),
            'module' => $this->getModule(),
        );
    }

    /**
     * @return Paiement
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * @param Paiement $paiement
     */
    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;
    }

    /**
     * @return Module
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @param Module $module
     */
    public function setModule($module)
    {
        $this->module = $module;
    }
}
