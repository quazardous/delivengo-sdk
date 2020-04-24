<?php

namespace DelivengoSDK\Entity;

/**
 * Class AdresseExpeditrice
 * @package DelivengoSDK\Entity
 */
class AdresseExpeditrice extends Entity
{
    /** @var int $id */
    protected $id;

    /** @var int $id_utilisateur */
    protected $id_utilisateur;

    /** @var string $raison_sociale */
    protected $raison_sociale;

    /** @var string $nom_complet */
    protected $nom_complet;

    /** @var string $complement_voie */
    protected $complement_voie;

    /** @var string $voie */
    protected $voie;

    /** @var string $boite_postale */
    protected $boite_postale;

    /** @var string $code_postal */
    protected $code_postal;

    /** @var string $commune */
    protected $commune;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'id' => $this->getId(),
            'id_utilisateur' => $this->getIdUtilisateur(),
            'raison_sociale' => $this->getRaisonSociale(),
            'nom_complet' => $this->getNomComplet(),
            'complement_voie' => $this->getComplementVoie(),
            'voie' => $this->getVoie(),
            'boite_postale' => $this->getBoitePostale(),
            'code_postal' => $this->getCodePostal(),
            'commune' => $this->getCommune(),
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
    public function getRaisonSociale()
    {
        return $this->raison_sociale;
    }

    /**
     * @param string $raison_sociale
     */
    public function setRaisonSociale($raison_sociale)
    {
        $this->raison_sociale = $raison_sociale;
    }

    /**
     * @return string
     */
    public function getNomComplet()
    {
        return $this->nom_complet;
    }

    /**
     * @param string $nom_complet
     */
    public function setNomComplet($nom_complet)
    {
        $this->nom_complet = $nom_complet;
    }

    /**
     * @return string
     */
    public function getComplementVoie()
    {
        return $this->complement_voie;
    }

    /**
     * @param string $complement_voie
     */
    public function setComplementVoie($complement_voie)
    {
        $this->complement_voie = $complement_voie;
    }

    /**
     * @return string
     */
    public function getVoie()
    {
        return $this->voie;
    }

    /**
     * @param string $voie
     */
    public function setVoie($voie)
    {
        $this->voie = $voie;
    }

    /**
     * @return string
     */
    public function getBoitePostale()
    {
        return $this->boite_postale;
    }

    /**
     * @param string $boite_postale
     */
    public function setBoitePostale($boite_postale)
    {
        $this->boite_postale = $boite_postale;
    }

    /**
     * @return string
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * @param string $code_postal
     */
    public function setCodePostal($code_postal)
    {
        $this->code_postal = $code_postal;
    }

    /**
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * @param string $commune
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;
    }
}
