<?php

namespace DelivengoSDK\Entity;

/**
 * Class Erreur
 * @package DelivengoSDK\Entity
 */
class Error extends Entity
{
    /** @var int $code */
    protected $code;

    /** @var string $message */
    protected $message;

    /** @var string $description */
    protected $description;

    /** @var array $details */
    protected $details;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'code' => $this->getCode(),
            'message' => $this->getMessage(),
            'description' => $this->getDescription(),
            'details' => $this->getDetails(),
        );
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param array | null $details
     */
    public function setDetails($details)
    {
        $this->details = $details === null ? array() : $details;
    }
}
