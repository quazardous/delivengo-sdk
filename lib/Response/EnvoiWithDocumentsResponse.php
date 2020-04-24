<?php

namespace DelivengoSDK\Response;

/**
 * Class EnvoiWithDocumentsResponse
 * @package DelivengoSDK\Response
 */
class EnvoiWithDocumentsResponse extends AbstractDelivengoResponse implements DelivengoReturnedResponseInterface
{
    /** @var \DelivengoSDK\Entity\EnvoiWithDocuments $data */
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
     * @return \DelivengoSDK\Entity\EnvoiWithDocuments
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \DelivengoSDK\Entity\EnvoiWithDocuments $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}
