<?php

namespace DelivengoSDK\Entity;

/**
 * Class Pli
 * @package DelivengoSDK\Entity
 */
class Pli extends Entity
{
    /** @var int $id */
    protected $id;

    /** @var string $numero */
    protected $numero;

    /** @var Utilisateur $createur */
    protected $createur;

    /** @var Support $support */
    protected $support;

    /** @var AdresseNationale $expediteur */
    protected $expediteur;

    /** @var AdresseInternationale | AdresseNationale $destinataire */
    protected $destinataire;

    /** @var DocumentsDouaniers $documents_douaniers */
    protected $documents_douaniers;

    /** @var Imputation $imputation */
    protected $imputation;

    /** @var AdresseNationale $retour_ar */
    protected $retour_ar;

    /** @var string $reference */
    protected $reference;

    /** @var int $options */
    protected $options;

    /** @var string $date_validite */
    protected $date_validite;

    /** @var Statut $statut */
    protected $statut;

    /** @var array $suivi */
    protected $suivi;

    /** @var Tracking $tracking */
    protected $tracking;

    /** @var Produit $produit */
    protected $produit;

    /** @var string $options_notification */
    protected $options_notification;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'id' => $this->getId(),
            'numero' => $this->getNumero(),
            'createur' => $this->getCreateur(),
            'support' => $this->getSupport(),
            'expediteur' => $this->getExpediteur(),
            'destinataire' => $this->getDestinataire(),
            'documents_douaniers' => $this->getDocumentsDouaniers(),
            'imputation' => $this->getImputation(),
            'retour_ar' => $this->getRetourAr(),
            'reference' => $this->getReference(),
            'options' => $this->getOptions(),
            'date_validite' => $this->getDateValidite(),
            'statut' => $this->getStatut(),
            'suivi' => $this->getSuivi(),
            'tracking' => $this->getTracking(),
            'produit' => $this->getProduit(),
            'options_notification' => $this->getOptionsNotification(),
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
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return Utilisateur
     */
    public function getCreateur()
    {
        return $this->createur;
    }

    /**
     * @param Utilisateur $createur
     */
    public function setCreateur($createur)
    {
        $this->createur = $createur;
    }

    /**
     * @return Support
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * @param Support $support
     */
    public function setSupport($support)
    {
        $this->support = $support;
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
     * @return AdresseInternationale | AdresseNationale
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * @param AdresseInternationale | AdresseNationale $destinataire
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;
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
     * @return Imputation
     */
    public function getImputation()
    {
        return $this->imputation;
    }

    /**
     * @param Imputation $imputation
     */
    public function setImputation($imputation)
    {
        $this->imputation = $imputation;
    }

    /**
     * @return AdresseNationale
     */
    public function getRetourAr()
    {
        return $this->retour_ar;
    }

    /**
     * @param AdresseNationale $retour_ar
     */
    public function setRetourAr($retour_ar)
    {
        $this->retour_ar = $retour_ar;
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
     * @return string
     */
    public function getDateValidite()
    {
        return $this->date_validite;
    }

    /**
     * @param string $date_validite
     */
    public function setDateValidite($date_validite)
    {
        $this->date_validite = $date_validite;
    }

    /**
     * @return Statut
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param Statut $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return array
     */
    public function getSuivi()
    {
        return $this->suivi;
    }

    /**
     * @param array $suivi
     */
    public function setSuivi($suivi)
    {
        $this->suivi = $suivi;
    }

    /**
     * @return Tracking
     */
    public function getTracking()
    {
        return $this->tracking;
    }

    /**
     * @param Tracking $tracking
     */
    public function setTracking($tracking)
    {
        $this->tracking = $tracking;
    }

    /**
     * @return Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param Produit $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

    /**
     * @return string
     */
    public function getOptionsNotification()
    {
        return $this->options_notification;
    }

    /**
     * @param string $options_notification
     */
    public function setOptionsNotification($options_notification)
    {
        $this->options_notification = $options_notification;
    }
}
