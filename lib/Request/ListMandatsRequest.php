<?php

namespace DelivengoSDK\Request;

use DelivengoSDK\Response\ListMandatsResponse;

/**
 * Class ListMandatsRequest
 * @package DelivengoSDK\Request
 */
class ListMandatsRequest extends AbstractDelivengoRequest
{
    const METHOD = 'GET';
    const PATH = '/mandats';

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
        return ListMandatsResponse::buildFromResponse($response);
    }
}
