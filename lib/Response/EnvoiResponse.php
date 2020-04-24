<?php

namespace DelivengoSDK\Response;

/**
 * Class EnvoiResponse
 * @package DelivengoSDK\Response
 */
class EnvoiResponse extends AbstractDelivengoResponse implements DelivengoReturnedResponseInterface
{
    /** @var \DelivengoSDK\Entity\Envoi $data */
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
     * @return \DelivengoSDK\Entity\Envoi
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \DelivengoSDK\Entity\Envoi $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}
