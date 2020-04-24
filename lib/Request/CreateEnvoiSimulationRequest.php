<?php

namespace DelivengoSDK\Request;

use DelivengoSDK\Response\CreateEnvoiSimulationResponse;

/**
 * Class CreateEnvoiSimulationRequest
 * @package DelivengoSDK\Request
 */
class CreateEnvoiSimulationRequest extends CreateEnvoiRequest
{
    const METHOD = 'POST';
    const PATH = '/envois';

    /**
     * @param string $response
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function buildResponse($response)
    {
        return CreateEnvoiSimulationResponse::buildFromResponse($response);
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return array('Api-Creation-Mode: simulation');
    }
}
