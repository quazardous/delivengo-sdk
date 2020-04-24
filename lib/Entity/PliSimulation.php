<?php

namespace DelivengoSDK\Entity;

/**
 * Class PliSimulation
 * @package DelivengoSDK\Entity
 */
class PliSimulation extends Entity
{
    /** @var Support $support */
    protected $support;

    /** @var AdresseNationale $expediteur */
    protected $expediteur;

    /** @var AdresseInternationale | AdresseNationale $destinataire */
    protected $destinataire;

    /** @var string $reference */
    protected $reference;

    /** @var int $options */
    protected $options;

    /** @var string $options_notification */
    protected $options_notification;

    /** @var Produit $produit */
    protected $produit;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'support' => $this->getSupport(),
            'expediteur' => $this->getExpediteur(),
            'destinataire' => $this->getDestinataire(),
            'reference' => $this->getReference(),
            'options' => $this->getOptions(),
            'options_notification' => $this->getOptionsNotification(),
            'produit' => $this->getProduit(),
        );
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
}
