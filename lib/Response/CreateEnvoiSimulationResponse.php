<?php

namespace DelivengoSDK\Response;

/**
 * Class CreateEnvoiSimulationResponse
 * @package DelivengoSDK\Response
 */
class CreateEnvoiSimulationResponse extends AbstractDelivengoResponse implements DelivengoReturnedResponseInterface
{
    /** @var \DelivengoSDK\Entity\EnvoiSimulation $data */
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
     * @return \DelivengoSDK\Entity\EnvoiSimulation
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \DelivengoSDK\Entity\EnvoiSimulation $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}
