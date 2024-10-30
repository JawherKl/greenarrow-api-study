<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GreenArrowApiService
{
    private $client;
    private $baseUrl;
    private $authHeader;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        $this->baseUrl = 'http://mta.key-performance-group.com/ga/api/v3/eng/';
        $this->authHeader = [
            'Authorization' => 'Basic ' . base64_encode('dir-tech@hub-score.com:SQ4CW2*bh2q#!PAyu%NUP#*'),
            'Content-type' => 'application/json',
        ];
    }

    public function callApi(string $endpoint, array $params = []): array
    {
        $response = $this->client->request('GET', $this->baseUrl . $endpoint, [
            'headers' => $this->authHeader,
            'query' => $params,
        ]);

        return $response->toArray();
    }
}
