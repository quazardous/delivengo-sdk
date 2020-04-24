<?php

namespace DelivengoSDK\Entity;

/**
 * Class Imputation
 * @package DelivengoSDK\Entity
 */
class Imputation extends Entity
{
    /** @var string $libelle */
    protected $libelle;

    /** @var int $id_code_imputation */
    protected $id_code_imputation;

    /** @var int $id_utilisateur_imputation */
    protected $id_utilisateur_imputation;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'libelle' => $this->getLibelle(),
            'id_code_imputation' => $this->getIdCodeImputation(),
            'id_utilisateur_imputation' => $this->getIdUtilisateurImputation(),
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
    public function getIdCodeImputation()
    {
        return $this->id_code_imputation;
    }

    /**
     * @param int $id_code_imputation
     */
    public function setIdCodeImputation($id_code_imputation)
    {
        $this->id_code_imputation = $id_code_imputation;
    }

    /**
     * @return int
     */
    public function getIdUtilisateurImputation()
    {
        return $this->id_utilisateur_imputation;
    }

    /**
     * @param int $id_utilisateur_imputation
     */
    public function setIdUtilisateurImputation($id_utilisateur_imputation)
    {
        $this->id_utilisateur_imputation = $id_utilisateur_imputation;
    }
}
