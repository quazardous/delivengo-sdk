<?php

namespace DelivengoSDK\Request;

use DelivengoSDK\Response\ListExpediteursResponse;

/**
 * Class ListExpediteursRequest
 * @package DelivengoSDK\Request
 */
class ListExpediteursRequest extends AbstractDelivengoRequest
{
    const METHOD = 'GET';
    const PATH = '/expediteurs';

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
        return ListExpediteursResponse::buildFromResponse($response);
    }
}
