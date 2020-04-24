<?php

namespace DelivengoSDK\Entity;

/**
 * Class Produit
 * @package DelivengoSDK\Entity
 */
class Produit extends Entity
{
    /** @var string $libelle */
    protected $libelle;

    /** @var int $zone */
    protected $zone;

    /** @var float $prix_ttc */
    protected $prix_ttc;

    /** @var float $prix_unitaire */
    protected $prix_unitaire;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'libelle' => $this->getLibelle(),
            'zone' => $this->getZone(),
            'prix_ttc' => $this->getPrixTtc(),
            'prix_unitaire' => $this->getPrixUnitaire(),
        );
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return int
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * @param int $zone
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    /**
     * @return float
     */
    public function getPrixTtc()
    {
        return $this->prix_ttc;
    }

    /**
     * @param float $prix_ttc
     */
    public function setPrixTtc($prix_ttc)
    {
        $this->prix_ttc = $prix_ttc;
    }

    /**
     * @return float
     */
    public function getPrixUnitaire()
    {
        return $this->prix_unitaire;
    }

    /**
     * @param float $prix_unitaire
     */
    public function setPrixUnitaire($prix_unitaire)
    {
        $this->prix_unitaire = $prix_unitaire;
    }
}
