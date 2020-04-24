<?php

namespace DelivengoSDK\Entity;

/**
 * Class Article
 * @package DelivengoSDK\Entity
 */
class Article extends Entity
{
    /** @var string $description_detaillee */
    protected $description_detaillee;

    /** @var int $quantite */
    protected $quantite;

    /** @var float $poids */
    protected $poids;

    /** @var float $valeur */
    protected $valeur;

    /** @var float $pays_origine */
    protected $pays_origine;

    /** @var string $num_tarifaire */
    protected $num_tarifaire;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'description_detaillee' => $this->getDescriptionDetaillee(),
            'quantite' => $this->getQuantite(),
            'poids' => $this->getPoids(),
            'valeur' => $this->getPoids(),
            'pays_origine' => $this->getPaysOrigine(),
            'num_tarifaire' => $this->getNumTarifaire(),
        );
    }

    /**
     * @return mixed
     */
    public function getDescriptionDetaillee()
    {
        return $this->description_detaillee;
    }

    /**
     * @param mixed $description_detaillee
     */
    public function setDescriptionDetaillee($description_detaillee)
    {
        $this->description_detaillee = $description_detaillee;
    }

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return float
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * @param float $poids
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    /**
     * @return float
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * @param float $valeur
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
    }

    /**
     * @return mixed
     */
    public function getPaysOrigine()
    {
        return $this->pays_origine;
    }

    /**
     * @param mixed $pays_origine
     */
    public function setPaysOrigine($pays_origine)
    {
        $this->pays_origine = $pays_origine;
    }

    /**
     * @return mixed
     */
    public function getNumTarifaire()
    {
        return $this->num_tarifaire;
    }

    /**
     * @param mixed $num_tarifaire
     */
    public function setNumTarifaire($num_tarifaire)
    {
        $this->num_tarifaire = $num_tarifaire;
    }
}
