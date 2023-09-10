<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PurchaseController extends Controller
{
    private ApiController $apiController;

    public function __construct(ApiController $apiController)
    {
        $this->apiController = $apiController;
    }

    public function index(): JsonResponse
    {
        // Fetch a list of all purchases
        return $this->apiController->makeApiRequest('GET', '/purchases');
    }

    public function store(Request $request): JsonResponse
    {
        // Create a new purchase
        return $this->apiController->makeApiRequest('POST', '/purchases');
    }
}
