<?php

namespace DelivengoSDK\Entity;

/**
 * Class EnvoiSimulation
 * @package DelivengoSDK\Entity
 */
class EnvoiSimulation extends Entity
{
    /** @var int $id_support */
    protected $id_support;

    /** @var string $descriptif */
    protected $descriptif;

    /** @var PliSimulation[] $plis */
    protected $plis;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'id_support' => $this->getIdSupport(),
            'descriptif' => $this->getDescriptif(),
            'plis' => $this->getPlis(),
        );
    }

    /**
     * @return int
     */
    public function getIdSupport()
    {
        return $this->id_support;
    }

    /**
     * @param int $id_support
     */
    public function setIdSupport($id_support)
    {
        $this->id_support = $id_support;
    }

    /**
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * @param string $descriptif
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;
    }

    /**
     * @return PliSimulation[]
     */
    public function getPlis()
    {
        return $this->plis;
    }

    /**
     * @param PliSimulation[] $plis
     */
    public function setPlis($plis)
    {
        $this->plis = $plis;
    }
}
