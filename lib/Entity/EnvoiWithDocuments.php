<?php

namespace DelivengoSDK\Entity;

/**
 * Class EnvoiWithDocuments
 * @package DelivengoSDK\Entity
 */
class EnvoiWithDocuments extends Entity
{
    /** @var int $id */
    protected $id;

    /** @var PliAccept[] $plis */
    protected $plis;

    /** @var string $documents_supports */
    protected $documents_supports;

    /** @var string $documents_douaniers */
    protected $documents_douaniers;

    /** @var string $factures */
    protected $factures;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'id' => $this->getId(),
            'plis' => $this->getPlis(),
            'documents_supports' => $this->getDocumentsSupports(),
            'documents_douaniers' => $this->getDocumentsDouaniers(),
            'factures' => $this->getFactures(),
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
     * @return PliAccept[]
     */
    public function getPlis()
    {
        return $this->plis;
    }

    /**
     * @param PliAccept[] $plis
     */
    public function setPlis($plis)
    {
        $this->plis = $plis;
    }

    /**
     * @return string
     */
    public function getDocumentsSupports()
    {
        return $this->documents_supports;
    }

    /**
     * @param string $documents_supports
     */
    public function setDocumentsSupports($documents_supports)
    {
        $this->documents_supports = $documents_supports;
    }

    /**
     * @return string
     */
    public function getDocumentsDouaniers()
    {
        return $this->documents_douaniers;
    }

    /**
     * @param string $documents_douaniers
     */
    public function setDocumentsDouaniers($documents_douaniers)
    {
        $this->documents_douaniers = $documents_douaniers;
    }

    /**
     * @return string
     */
    public function getFactures()
    {
        return $this->factures;
    }

    /**
     * @param string $factures
     */
    public function setFactures($factures)
    {
        $this->factures = $factures;
    }
}
