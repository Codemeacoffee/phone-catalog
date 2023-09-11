<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class MainController extends Controller
{
    private ApiController $apiController;
    private PhoneController $phoneController;
    private PurchaseController $purchaseController;

    public function __construct()
    {
        //Instantiate the controllers that manage the API connection
        $this->apiController = new ApiController();
        $this->phoneController = new PhoneController($this->apiController);
        $this->purchaseController = new PurchaseController($this->apiController);
    }

    function index(): View
    {
        //Get all phones and return a view to showcase them
        $phones = $this->phoneController->index();

        return view('main.index')->with('phones', $phones);
    }

    function phoneDetails($id): View
    {
        //Get a phone by ID and return a view to showcase it
        $phone = $this->phoneController->show($id);

        return view('main.phoneDetails')->with('phone', $phone);
    }

    function purchase($id): RedirectResponse
    {
        //Purchase a phone by Id using the test user "testUser"
        $this->purchaseController->store($id, 'testUser');

        return redirect('phone/'.$id)->with('message', 'Su compra se ha realizado con éxito.');
    }
}
