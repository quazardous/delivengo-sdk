<?php

namespace DelivengoSDK\Entity;

/**
 * Class EnvoiPli
 * @package DelivengoSDK\Entity
 */
class EnvoiPli extends Entity
{
    /** @var AdresseNationale $expediteur */
    protected $expediteur;

    /** @var AdresseInternationale $destinataire */
    protected $destinataire;

    /** @var string $destinataire_email */
    protected $destinataire_email;

    /** @var string $reference */
    protected $reference;

    /** @var int $options */
    protected $options;

    /** @var int $poids */
    protected $poids;

    /** @var DocumentsDouaniers $documents_douaniers */
    protected $documents_douaniers;

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
            'expediteur' => $this->getExpediteur(),
            'destinataire' => $this->getDestinataire(),
            'destinataire_email' => $this->getDestinataireEmail(),
            'reference' => $this->getReference(),
            'options' => $this->getOptions(),
            'poids' => $this->getPoids(),
            'documents_douaniers' => $this->getDocumentsDouaniers(),
            'id_code_imputation' => $this->getIdCodeImputation(),
            'id_utilisateur_imputation' => $this->getIdUtilisateurImputation(),
        );
    }

    /**
     * @return AdresseNationale
     */
    public function getExpediteur()
    {
        return $this->expediteur;
    }

    /**
     * @param AdresseNationale $expediteur
     */
    public function setExpediteur($expediteur)
    {
        $this->expediteur = $expediteur;
    }

    /**
     * @return AdresseInternationale
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * @param AdresseInternationale $destinataire
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;
    }

    /**
     * @return string
     */
    public function getDestinataireEmail()
    {
        return $this->destinataire_email;
    }

    /**
     * @param string $destinataire_email
     */
    public function setDestinataireEmail($destinataire_email)
    {
        $this->destinataire_email = $destinataire_email;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return int
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param int $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return int
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * @param int $poids
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    /**
     * @return DocumentsDouaniers
     */
    public function getDocumentsDouaniers()
    {
        return $this->documents_douaniers;
    }

    /**
     * @param DocumentsDouaniers $documents_douaniers
     */
    public function setDocumentsDouaniers($documents_douaniers)
    {
        $this->documents_douaniers = $documents_douaniers;
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
