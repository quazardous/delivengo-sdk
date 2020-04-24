<?php

namespace DelivengoSDK\Entity;

/**
 * Class AdresseNationale
 * @package DelivengoSDK\Entity
 */
class AdresseNationale extends Entity
{
    /** @var string $raison_sociale */
    protected $raison_sociale;

    /** @var string $nom */
    protected $nom;

    /** @var string $complement_voie */
    protected $complement_voie;

    /** @var string $voie */
    protected $voie;

    /** @var string $boite_postale */
    protected $boite_postale;

    /** @var string $code_postal_commune */
    protected $code_postal_commune;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'raison_sociale' => $this->getRaisonSociale(),
            'nom' => $this->getNom(),
            'complement_voie' => $this->getComplementVoie(),
            'voie' => $this->getVoie(),
            'boite_postale' => $this->getBoitePostale(),
            'code_postal_commune' => $this->getCodePostalCommune(),
        );
    }

    /**
     * @param AdresseExpeditrice $adresseExpeditrice
     */
    public function setFromExpediteur(AdresseExpeditrice $adresseExpeditrice)
    {
        $this->raison_sociale = $adresseExpeditrice->getRaisonSociale();
        $this->nom = $adresseExpeditrice->getNomComplet();
        $this->complement_voie = $adresseExpeditrice->getComplementVoie();
        $this->voie = $adresseExpeditrice->getVoie();
        $this->boite_postale = $adresseExpeditrice->getBoitePostale();
        $this->code_postal_commune = $adresseExpeditrice->getCodePostal().' '.$adresseExpeditrice->getCommune();
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
    public function getCodePostalCommune()
    {
        return $this->code_postal_commune;
    }

    /**
     * @param string $code_postal_commune
     */
    public function setCodePostalCommune($code_postal_commune)
    {
        $this->code_postal_commune = $code_postal_commune;
    }
}
