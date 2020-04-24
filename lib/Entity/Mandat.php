<?php

namespace DelivengoSDK\Entity;

/**
 * Class Mandat
 * @package DelivengoSDK\Entity
 */
class Mandat extends Entity
{
    /** @var string $rum */
    protected $rum;

    /** @var string $iban */
    protected $iban;

    /** @var string $bic */
    protected $bic;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'rum' => $this->getRum(),
            'iban' => $this->getIban(),
            'bic' => $this->getBic(),
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

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param string $bic
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
    }
}
