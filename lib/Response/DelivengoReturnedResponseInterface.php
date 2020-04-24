<?php

namespace DelivengoSDK\Response;

/**
 * Interface DelivengoReturnedResponseInterface
 * @package DelivengoSDK\Response
 */
interface DelivengoReturnedResponseInterface
{
    /**
     * @param string $response
     * @return AbstractDelivengoResponse
     */
    public static function buildFromResponse($response);
}
