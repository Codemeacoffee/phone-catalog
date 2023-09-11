<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    private string $apiBaseURL;

    public function __construct()
    {
        // Initialize the API base URL from the .env file
        $this->apiBaseURL = env('API_BASE_URL');
    }

    public function makeApiRequest(string $method, string $endpoint, array $data = []): array
    {
        $client = new Client();

        try {
            $response = $client->request($method, $this->apiBaseURL . $endpoint, [
                'json' => $data
            ]);
            return json_decode($response->getBody(), true);

        } catch (GuzzleException $e) {
            abort($e->getCode());
        }
    }
}
