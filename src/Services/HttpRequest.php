<?php

namespace Bazofather\SPlus\Services;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpRequest
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function get($url, $headers = []): array
    {
        $response = $this->client->request(
            'GET',
            $url,
            [
                'headers' => $headers,
            ]
        );

        $statusCode = $response->getStatusCode();


        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'

        $result = $content;
        return $result->toArray();
    }
}
