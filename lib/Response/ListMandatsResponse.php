<?php

namespace DelivengoSDK\Response;

/**
 * Class ListMandatsResponse
 * @package DelivengoSDK\Response
 */
class ListMandatsResponse extends AbstractDelivengoResponse implements DelivengoReturnedResponseInterface
{
    /** @var \DelivengoSDK\Entity\Mandat[] $data */
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
     * @return \DelivengoSDK\Entity\Mandat[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \DelivengoSDK\Entity\Mandat[] $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}
