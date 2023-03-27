<?php

namespace SSB\Api;

use Exception;
use GuzzleHttp\Client as GuzzleClient;
use SSB\Api\Contracts\ShopEngineSettingsInterface;

class Client
{
    public const API_VERSION = 'v2';
    public static $debugData = [];
    public $apiUrl = '';
    public $privateKey = '';
    public $shop = '';
    public $debug = false;

    public function __construct(ShopEngineSettingsInterface $settings, $debug = false)
    {
        $this->shop = $settings->getShopEngineShopIdentifier();
        $this->apiUrl = $settings->getShopEngineServer();
        $this->privateKey = $settings->getShopEngineSecret();
        $this->debug = $debug;
    }

    public function get($resource, array $parameter = [], bool $raw = false)
    {
        return $this->makeRequest('GET', $resource, $parameter, [], $raw);
    }

    private function makeRequest($method, $resource, array $parameter, $postParameter = [], bool $raw = false)
    {
        // validate request
        foreach ($parameter as $key => $value) {
            if ($value === '') {
                return [];
            }
        }

        if ($this->debug) {
            $start = microtime(true);
        }

        $this->eventStart($resource);

        $timestamp = time();
        $signature = $this->makeSignature(http_build_query($parameter + $postParameter), $timestamp);

        $client = new GuzzleClient();

        try {
            $requestQuery = http_build_query(
                array_merge(
                    $parameter,
                    ['timestamp' => $timestamp, 'signature' => $signature]
                )
            );

            $url = $this->apiUrl . '/' . self::API_VERSION . "/{$this->shop}/$resource?$requestQuery";

            $response = $client->request(
                $method,
                $url,
                $method !== 'GET' ? ['json' => $postParameter] : []
            );

            if ($this->debug) {
                self::$debugData[] = [
                    'start' => $start,
                    'end' => microtime(true),
                    'url' => "$this->apiUrl/$url",
                    'params' => $parameter,
                    'postParams' => $postParameter,
                    'trace' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS),
                ];
            }

            $this->eventEnd($resource);

            $content = json_decode($response->getBody());

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception($response->getBody() . '', 10);
            }

            if (is_array($content)) {
                $arr = [];
                foreach ($content as $c) {
                    if (!$raw && isset($c->class)) {
                        $arr[] = ObjectSerializer::deserialize($c, '\\SSB\\Api\\Model\\' . $c->class, []);
                    } else {
                        $arr[] = $c;
                    }
                }
                return $arr;
            } else {
                if (!$raw && is_object($content) && isset($content->class)) {
                    return ObjectSerializer::deserialize($content, '\\SSB\\Api\\Model\\' . $content->class, []);
                } else {
                    return $content;
                }
            }
        } catch (Exception $exception) {
            $this->handleError($exception, [
                'version' => self::API_VERSION,
                'resource' => $resource,
                'params' => $parameter,
                'postParams' => $postParameter,
                'timestamp' => $timestamp,
            ]);
        }

        return [];
    }

    public function eventStart(string $resource): void
    {
    }

    private function makeSignature($query, $timestamp)
    {
        return base64_encode(hash('sha256', $query . $this->privateKey . $timestamp));
    }

    public function eventEnd(string $resource): void
    {
    }

    public function handleError(Exception $e, array $context): void
    {
    }

    public function post($resource, array $parameter)
    {
        return $this->makeRequest('POST', $resource, [], $parameter);
    }

    public function patch($resource, array $parameter)
    {
        return $this->makeRequest('PATCH', $resource, [], $parameter);
    }

    public function delete($resource, array $parameter = [])
    {
        return $this->makeRequest('DELETE', $resource, [], $parameter);
    }
}
