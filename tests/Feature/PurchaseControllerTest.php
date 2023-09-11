<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\PurchaseController;

class PurchaseControllerTest extends TestCase
{
    /** @var PurchaseController */
    private PurchaseController $purchaseController;

    protected function setUp(): void
    {
        parent::setUp();

        // Create an instance of PurchaseController
        $this->purchaseController = app(PurchaseController::class);
    }

    /** @test */
    public function it_can_get_a_list_of_purchases()
    {
        // Define a mock response for the /purchases endpoint
        Http::fake([
            '*' => Http::response(['purchases' => []], 200),
        ]);

        $response = $this->purchaseController->index();

        self::assertIsArray($response);
    }

    /** @test */
    public function it_can_create_a_new_purchase()
    {
        $phoneId = 2;
        $username = 'testUser';

        // Define a mock response for the /phones/{id}/buy endpoint (POST request)
        Http::fake([
            '*' => Http::response(['purchase' => ['id' => 1, 'phone_id' => $phoneId, 'username' => $username]], 200),
        ]);

        $response = $this->purchaseController->store($phoneId, $username);

        self::assertIsArray($response);
    }
}

