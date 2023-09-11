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
        //Instantiate a Guzzle client
        $client = new Client();

        try {
            //Make a request using the client
            $response = $client->request($method, $this->apiBaseURL . $endpoint, [
                'json' => $data
            ]);
            //On success; Return a decoded response
            return json_decode($response->getBody(), true);

        } catch (GuzzleException $e) {
            //On exception; Show an Error View using Abort to elevate the exception
            abort($e->getCode());
        }
    }
}
