<?php

namespace DelivengoSDK\Entity;

/**
 * Class Paiement
 * @package DelivengoSDK\Entity
 */
class Paiement extends Entity
{
    /** @var string $rum */
    protected $rum;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'rum' => $this->getRum(),
        );
    }

    /**
     * @return string
     */
    public function getRum()
    {
        return $this->rum;
    }

    /**
     * @param string $rum
     */
    public function setRum($rum)
    {
        $this->rum = $rum;
    }
}
