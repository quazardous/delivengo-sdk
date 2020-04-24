<?php

namespace DelivengoSDK\Entity;

/**
 * Class PliAccept
 * @package DelivengoSDK\Entity
 */
class PliAccept extends Entity
{
    /** @var int $id */
    protected $id;

    /** @var string $numero */
    protected $numero;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'id' => $this->getId(),
            'numero' => $this->getNumero(),
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
}
