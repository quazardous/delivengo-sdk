<?php

namespace DelivengoSDK\Entity;

/**
 * Class Statut
 * @package DelivengoSDK\Entity
 */
class Statut extends Entity
{
    /** @var int $id */
    protected $id;

    /** @var string $libelle */
    protected $libelle;

    /** @var string $date */
    protected $date;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'id' => $this->getId(),
            'libelle' => $this->getLibelle(),
            'date' => $this->getDate(),
        );
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
}
