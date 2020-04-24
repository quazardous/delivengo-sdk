<?php

namespace DelivengoSDK\Entity;

/**
 * Class Envoi
 * @package DelivengoSDK\Entity
 */
class Envoi extends Entity
{
    /** @var int $id */
    protected $id;

    /** @var int $id_utilisateur */
    protected $id_utilisateur;

    /** @var string $date_creation */
    protected $date_creation;

    /** @var string $date_impression */
    protected $date_impression;

    /** @var string $descriptif */
    protected $descriptif;

    /** @var Pli[] $plis */
    protected $plis;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'id' => $this->getId(),
            'id_utilisateur' => $this->getIdUtilisateur(),
            'date_creation' => $this->getDateCreation(),
            'date_impression' => $this->getDateImpression(),
            'descriptif' => $this->getDescriptif(),
            'plis' => $this->getPlis(),
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
     * @return int
     */
    public function getIdUtilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * @param int $id_utilisateur
     */
    public function setIdUtilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;
    }

    /**
     * @return string
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param string $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }

    /**
     * @return string
     */
    public function getDateImpression()
    {
        return $this->date_impression;
    }

    /**
     * @param string $date_impression
     */
    public function setDateImpression($date_impression)
    {
        $this->date_impression = $date_impression;
    }

    /**
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * @param string $descriptif
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;
    }

    /**
     * @return Pli[]
     */
    public function getPlis()
    {
        return $this->plis;
    }

    /**
     * @param Pli[] $plis
     */
    public function setPlis($plis)
    {
        $this->plis = $plis;
    }
}
