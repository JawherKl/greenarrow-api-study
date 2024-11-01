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
        $this->baseUrl = 'http://your_domain.com/ga/api/v3/eng/';
        $this->authHeader = [
            'Authorization' => 'Basic ' . base64_encode('your_user:your_password'),
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
