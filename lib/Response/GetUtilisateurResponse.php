<?php

namespace DelivengoSDK\Response;

/**
 * Class GetUtilisateurResponse
 * @package DelivengoSDK\Response
 */
class GetUtilisateurResponse extends AbstractDelivengoResponse implements DelivengoReturnedResponseInterface
{
    /** @var \DelivengoSDK\Entity\Utilisateur $data */
    protected $data;

    /**
     * @param string $response
     * @return object
     * @throws \JsonMapper_Exception
     */
    public static function buildFromResponse($response)
    {
        $responseObj = new self();
        $responseArray = json_decode($response, true);
        $responseObj = $responseObj->mapper->map($responseArray, $responseObj);

        return $responseObj;
    }

    /**
     * @return \DelivengoSDK\Entity\Utilisateur
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \DelivengoSDK\Entity\Utilisateur $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}
