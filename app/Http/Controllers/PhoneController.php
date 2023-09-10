<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PhoneController extends Controller
{
    private ApiController $apiController;

    public function __construct(ApiController $apiController)
    {
        $this->apiController = $apiController;
    }

    public function index(): array
    {
        // Fetch a list of all phones
        return $this->apiController->makeApiRequest('GET', '/phones');
    }

    public function show($id): JsonResponse
    {
        // Fetch a specific phone by ID
        return $this->apiController->makeApiRequest('GET', '/phones/' . $id);
    }

    public function store(Request $request): JsonResponse
    {
        // Create a new phone
        return $this->apiController->makeApiRequest('POST', '/phones');
    }

    public function destroy($id): JsonResponse
    {
        // Delete a phone by ID
        return $this->apiController->makeApiRequest('DELETE', '/phones/' . $id);
    }
}
