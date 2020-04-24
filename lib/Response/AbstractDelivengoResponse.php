<?php

namespace DelivengoSDK\Response;

use JsonMapper;

/**
 * Class AbstractDelivengoResponse
 * @package DelivengoSDK\Response
 */
abstract class AbstractDelivengoResponse
{
    /** @var JsonMapper $mapper */
    public $mapper;

    /** @var \DelivengoSDK\Entity\Error $error */
    public $error;

    /**
     * AbstractDelivengoResponse constructor.
     */
    public function __construct()
    {
        $this->mapper = new JsonMapper();
        $this->mapper->bEnforceMapType = false;
        $this->mapper->bStrictNullTypes = false;
    }

    /**
     * @return mixed
     */
    abstract public function getData();

    /**
     * @param mixed $data
     * @return mixed
     */
    abstract public function setData($data);
}
