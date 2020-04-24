<?php

namespace DelivengoSDK\Request;

use DelivengoSDK\Response\GetUtilisateurResponse;

/**
 * Class GetUtilisateurRequest
 * @package DelivengoSDK\Request
 */
class GetUtilisateurRequest extends AbstractDelivengoRequest
{
    const METHOD = 'GET';
    const PATH = '/utilisateurs/%d';

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
        return GetUtilisateurResponse::buildFromResponse($response);
    }
}
