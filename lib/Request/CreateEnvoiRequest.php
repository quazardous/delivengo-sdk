<?php

namespace DelivengoSDK\Request;

use DelivengoSDK\Entity\EnvoiPli;
use DelivengoSDK\Entity\Extra;
use DelivengoSDK\Response\EnvoiResponse;

/**
 * Class CreateEnvoiRequest
 * @package DelivengoSDK\Request
 */
class CreateEnvoiRequest extends AbstractDelivengoRequest
{
    const METHOD = 'POST';
    const PATH = '/envois';

    /** @var Extra $extra */
    protected $extra;

    /** @var int $id_utilisateur */
    protected $id_utilisateur;

    /** @var int $id_support */
    protected $id_support;

    /** @var string $descriptif */
    protected $descriptif;

    /** @var EnvoiPli[] */
    protected $plis;

    /**
     * @return array|mixed
     */
    public function jsonSerialize()
    {
        return array(
            'data' => array(
                'extra' => $this->getExtra(),
                'id_utilisateur' => $this->getIdUtilisateur(),
                'id_support' => $this->getIdSupport(),
                'descriptif' => $this->getDescriptif(),
                'plis' => $this->getPlis(),
            ),
        );
    }

    /**
     * @param string $response
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function buildResponse($response)
    {
        return EnvoiResponse::buildFromResponse($response);
    }

    /**
     * @return Extra
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @param Extra $extra
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;
    }

    /**
     * @return int
     */
    public function getIdUtilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * @param int $id_utilisateur
     */
    public function setIdUtilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;
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
     * @return EnvoiPli[]
     */
    public function getPlis()
    {
        return $this->plis;
    }

    /**
     * @param EnvoiPli[] $plis
     */
    public function setPlis($plis)
    {
        $this->plis = $plis;
    }
}
