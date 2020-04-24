<?php

namespace DelivengoSDK\Entity;

/**
 * Class Tracking
 * @package DelivengoSDK\Entity
 */
class Tracking extends Entity
{
    /** @var string $url */
    protected $url;

    /** @var string $api_key */
    protected $api_key;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'url' => $this->getUrl(),
            'api_key' => $this->getApiKey(),
        );
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * @param string $api_key
     */
    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;
    }
}
