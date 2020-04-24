<?php

namespace DelivengoSDK\Entity;

/**
 * Class Support
 * @package DelivengoSDK\Entity
 */
class Support extends Entity
{
    /** @var int $id */
    protected $id;

    /** @var string $nom */
    protected $nom;

    /** @var string $nom_long */
    protected $nom_long;

    /** @var string $code */
    protected $code;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'id' => $this->getId(),
            'nom' => $this->getNom(),
            'nom_long' => $this->getNomLong(),
            'code' => $this->getCode(),
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
    public function getNomLong()
    {
        return $this->nom_long;
    }

    /**
     * @param string $nom_long
     */
    public function setNomLong($nom_long)
    {
        $this->nom_long = $nom_long;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }
}
