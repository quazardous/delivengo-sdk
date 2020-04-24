<?php

namespace DelivengoSDK\Request;

/**
 * Class AbstractDelivengoRequest
 * @package DelivengoSDK
 */
abstract class AbstractDelivengoRequest implements \JsonSerializable
{
    const PATH = '';
    const METHOD = '';

    abstract public function buildResponse($response);

    /**
     * @return string
     */
    public function getPath()
    {
        return static::PATH;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return static::METHOD;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return array();
    }
}
