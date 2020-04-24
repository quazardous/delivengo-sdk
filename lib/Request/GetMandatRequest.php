<?php

namespace DelivengoSDK\Request;

use DelivengoSDK\Response\GetMandatResponse;

/**
 * Class GetMandatRequest
 * @package DelivengoSDK\Request
 */
class GetMandatRequest extends AbstractDelivengoRequest
{
    const METHOD = 'GET';
    const PATH = '/mandats/%d';

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
        return GetMandatResponse::buildFromResponse($response);
    }
}
