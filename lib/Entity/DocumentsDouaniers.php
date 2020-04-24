<?php

namespace DelivengoSDK\Entity;

/**
 * Class DocumentsDouaniers
 * @package DelivengoSDK\Entity
 */
class DocumentsDouaniers extends Entity
{
    /** @var array $envoi_nature */
    protected $envoi_nature;

    /** @var int $envoi_commercial */
    protected $envoi_commercial;

    /** @var string $observation */
    protected $observation;

    /** @var string $num_licence */
    protected $num_licence;

    /** @var string $num_certificat */
    protected $num_certificat;

    /** @var string $num_facture */
    protected $num_facture;

    /** @var int $quantite_total */
    protected $quantite_total;

    /** @var float $poids_total */
    protected $poids_total;

    /** @var bool $facture_fichier */
    protected $facture_fichier;

    /** @var float $valeur_dts */
    protected $valeur_dts;

    /** @var float $valeur_total */
    protected $valeur_total;

    /** @var float $frais_port */
    protected $frais_port;

    /** @var Article[] $articles */
    protected $articles;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'envoi_nature' => $this->getEnvoiNature(),
            'envoi_commercial' => $this->getEnvoiCommercial(),
            'observation' => $this->getObservation(),
            'num_licence' => $this->getNumLicence(),
            'num_certificat' => $this->getNumCertificat(),
            'num_facture' => $this->getNumFacture(),
            'quantite_total' => $this->getQuantiteTotal(),
            'facture_fichier' => $this->getFactureFichier(),
            'valeur_dts' => $this->getValeurDts(),
            'valeur_total' => $this->getValeurTotal(),
            'frais_port' => $this->getFraisPort(),
            'articles' => $this->getArticles(),
        );
    }

    /**
     * @return array
     */
    public function getEnvoiNature()
    {
        return $this->envoi_nature;
    }

    /**
     * @param array $envoi_nature
     */
    public function setEnvoiNature($envoi_nature)
    {
        $this->envoi_nature = $envoi_nature;
    }

    /**
     * @return int
     */
    public function getEnvoiCommercial()
    {
        return $this->envoi_commercial;
    }

    /**
     * @param int $envoi_commercial
     */
    public function setEnvoiCommercial($envoi_commercial)
    {
        $this->envoi_commercial = $envoi_commercial;
    }

    /**
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * @param string $observation
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;
    }

    /**
     * @return string
     */
    public function getNumLicence()
    {
        return $this->num_licence;
    }

    /**
     * @param string $num_licence
     */
    public function setNumLicence($num_licence)
    {
        $this->num_licence = $num_licence;
    }

    /**
     * @return string
     */
    public function getNumCertificat()
    {
        return $this->num_certificat;
    }

    /**
     * @param string $num_certificat
     */
    public function setNumCertificat($num_certificat)
    {
        $this->num_certificat = $num_certificat;
    }

    /**
     * @return string
     */
    public function getNumFacture()
    {
        return $this->num_facture;
    }

    /**
     * @param string $num_facture
     */
    public function setNumFacture($num_facture)
    {
        $this->num_facture = $num_facture;
    }

    /**
     * @return int
     */
    public function getQuantiteTotal()
    {
        return $this->quantite_total;
    }

    /**
     * @param int $quantite_total
     */
    public function setQuantiteTotal($quantite_total)
    {
        $this->quantite_total = $quantite_total;
    }

    /**
     * @return float
     */
    public function getPoidsTotal()
    {
        return $this->poids_total;
    }

    /**
     * @param float $poids_total
     */
    public function setPoidsTotal($poids_total)
    {
        $this->poids_total = $poids_total;
    }

    /**
     * @return bool
     */
    public function getFactureFichier()
    {
        return $this->facture_fichier;
    }

    /**
     * @param bool $facture_fichier
     */
    public function setFactureFichier($facture_fichier)
    {
        $this->facture_fichier = $facture_fichier;
    }

    /**
     * @return float
     */
    public function getValeurDts()
    {
        return $this->valeur_dts;
    }

    /**
     * @param float $valeur_dts
     */
    public function setValeurDts($valeur_dts)
    {
        $this->valeur_dts = $valeur_dts;
    }

    /**
     * @return float
     */
    public function getValeurTotal()
    {
        return $this->valeur_total;
    }

    /**
     * @param float $valeur_total
     */
    public function setValeurTotal($valeur_total)
    {
        $this->valeur_total = $valeur_total;
    }

    /**
     * @return float
     */
    public function getFraisPort()
    {
        return $this->frais_port;
    }

    /**
     * @param float $frais_port
     */
    public function setFraisPort($frais_port)
    {
        $this->frais_port = $frais_port;
    }

    /**
     * @return Article[]
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * @param Article[] $articles
     */
    public function setArticles($articles)
    {
        $this->articles = $articles;
    }
}
