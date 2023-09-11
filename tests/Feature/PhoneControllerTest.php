<?php
use Illuminate\Support\Facades\Http;
use \App\Http\Controllers\PhoneController;
use Tests\TestCase;

class PhoneControllerTest extends TestCase
{
    /** @var PhoneController */
    private PhoneController $phoneController;

    protected function setUp(): void
    {
        parent::setUp();

        // Create an instance of PhoneController
        $this->phoneController = app(PhoneController::class);
    }

    /** @test */
    public function it_can_get_a_list_of_phones()
    {
        // Define a mock response for the /phones endpoint
        Http::fake([
            '*' => Http::response(['phones' => []], 200),
        ]);

        $response = $this->phoneController->index();

        self::assertIsArray($response);
    }

    /** @test */
    public function it_can_get_a_specific_phone()
    {
        $id = 2;

        // Define a mock response for the /phones/{id} endpoint
        Http::fake([
            '*' => Http::response(['phone' => ['id' => $id, 'name' => 'Phone Name']], 200),
        ]);

        $response = $this->phoneController->show($id);

        self::assertIsArray($response);
    }

    /** @test */
    public function it_can_create_a_new_phone()
    {
        $data = [
            'name' => 'Test',
            'photoUrl' => 'Test',
            'price' => 'Test',
            'description' => 'Test',
        ];

        // Define a mock response for the /phones endpoint (POST request)
        Http::fake([
            '*' => Http::response(['phone' => $data], 200),
        ]);

        $response = $this->phoneController->store($data);

        self::assertIsArray($response);
    }

    /** @test */
    public function it_can_delete_a_specific_phone()
    {
        $id = 4;

        // Define a mock response for the /phones/{id} endpoint (DELETE request)
        Http::fake([
            '*' => Http::response(['message' => 'Phone deleted successfully'], 200),
        ]);

        $response = $this->phoneController->destroy($id);

        self::assertIsArray($response);
    }
}
