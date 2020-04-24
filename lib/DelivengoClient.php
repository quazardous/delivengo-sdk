<?php

namespace DelivengoSDK;

use DelivengoSDK\Request\AbstractDelivengoRequest;
use Exception;

/**
 * Class DelivengoClient
 * @package DelivengoSDK
 */
class DelivengoClient
{
    const BASE_URL = 'https://mydelivengo.laposte.fr/api/v2.3';

    /** @var string $apiKey */
    private $apiKey;

    /** @var string $baseUrl */
    private $baseUrl;

    /**
     * DelivengoClient constructor.
     * @param string $apiKey
     * @param string $baseUrl
     */
    public function __construct($apiKey, $baseUrl = '')
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = $baseUrl ?: self::BASE_URL;
    }

    /**
     * @param string                   $operation
     * @param AbstractDelivengoRequest $request
     * @param array                    $params
     * @return mixed
     * @throws Exception
     */
    public function send($operation, $request, $params = array())
    {
        switch ($operation) {
            case 'get':
                $method = 'GET';
                if (!isset($params['id'])) {
                    throw new \Exception('ID parameter is required');
                }
                $url = sprintf($this->baseUrl.$request->getPath(), $params['id']);
                unset($params['id']);

                break;
            case 'list':
                $method = 'GET';
                $url = $this->baseUrl.$request->getPath();
                break;
            case 'create':
                $method = 'POST';
                $url = $this->baseUrl.$request->getPath();
                break;
            default:
                throw new \Exception('Unknown operation type.');
                break;
        }

        $urlParams = empty($params) ? '' : '?'.http_build_query($params);
        $headers = array_merge(
            $request->getHeaders(),
            array(sprintf('API-Authorization: %s', $this->apiKey), 'Content-Type: application/json')
        );
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url.$urlParams,
                CURLOPT_POSTFIELDS => json_encode($request),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_VERBOSE => false,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_HTTPHEADER => $headers,
                CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
            )
        );
        $response = curl_exec($curl);
        if ($response === false) {
            throw new \Exception('Empty Response.');
        }
        $curlInfo = curl_getinfo($curl);
        $curlError = curl_errno($curl);
        curl_close($curl);
        $httpCode = $curlInfo['http_code'];
        if ($curlError) {
            throw new \Exception('cURL error: '.$curlError);
        }
        if (!in_array($httpCode, array(200, 201, 400, 404))) {
            throw new \Exception(sprintf('Bad HTTP code: %s', $httpCode));
        }

        if (json_decode($response) === null) {
            throw new \Exception(sprintf('Invalid JSON - HTTP Code %s', $httpCode));
        }

        return $request->buildResponse($response);
    }
}
