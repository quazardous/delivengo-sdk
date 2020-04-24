<?php

namespace DelivengoSDK\Entity;

/**
 * Class Createur
 * @package DelivengoSDK\Entity
 */
class Createur extends Entity
{
    /** @var string $nom */
    protected $nom;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'nom' => $this->getNom(),
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
}
