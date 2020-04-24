<?php

namespace DelivengoSDK\Request;

use DelivengoSDK\Response\EnvoiWithDocumentsResponse;

/**
 * Class CreateEnvoiWithDocumentsRequest
 * @package DelivengoSDK\Request
 */
class CreateEnvoiWithDocumentsRequest extends CreateEnvoiRequest
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
