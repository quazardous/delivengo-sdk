<?php

namespace DelivengoSDK\Request;

use DelivengoSDK\Response\EnvoiWithDocumentsResponse;

/**
 * Class GetEnvoiWithDocumentsRequest
 * @package DelivengoSDK\Request
 */
class GetEnvoiWithDocumentsRequest extends AbstractDelivengoRequest
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
        return EnvoiWithDocumentsResponse::buildFromResponse($response);
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return array('Accept: application/pdf');
    }
}
