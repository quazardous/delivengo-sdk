<?php

namespace DelivengoSDK\Request;

use DelivengoSDK\Response\EnvoiResponse;

/**
 * Class GetEnvoiRequest
 * @package DelivengoSDK\Request
 */
class GetEnvoiRequest extends AbstractDelivengoRequest
{
    const METHOD = 'GET';
    const PATH = '/envois/%d';

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array();
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
}
