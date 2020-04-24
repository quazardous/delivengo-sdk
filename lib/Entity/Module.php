<?php

namespace DelivengoSDK\Entity;

/**
 * Class Module
 * @package DelivengoSDK\Entity
 */
class Module extends Entity
{
    /** @var string $nom */
    protected $nom;

    /** @var string $version */
    protected $version;

    /** @var Createur $createur */
    protected $createur;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'nom' => $this->getNom(),
            'version' => $this->getVersion(),
            'createur' => $this->getCreateur(),
        );
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return Createur
     */
    public function getCreateur()
    {
        return $this->createur;
    }

    /**
     * @param Createur $createur
     */
    public function setCreateur($createur)
    {
        $this->createur = $createur;
    }
}
