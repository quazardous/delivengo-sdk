<?php

namespace DelivengoSDK\Response;

/**
 * Class ListExpediteursResponse
 * @package DelivengoSDK\Response
 */
class ListExpediteursResponse extends AbstractDelivengoResponse implements DelivengoReturnedResponseInterface
{
    /** @var \DelivengoSDK\Entity\AdresseExpeditrice[] $data */
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
     * @return \DelivengoSDK\Entity\AdresseExpeditrice[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \DelivengoSDK\Entity\AdresseExpeditrice[] $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}
