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
        $this->apiController = new ApiController();
        $this->phoneController = new PhoneController($this->apiController);
        $this->purchaseController = new PurchaseController($this->apiController);
    }

    function index(): View
    {
        $phones = $this->phoneController->index();

        $this->handleError($phones);

        return view('main.index')->with('phones', $phones);
    }

    function phoneDetails($id): View
    {
        $phone = $this->phoneController->show($id);

        $this->handleError($phone);

        return view('main.phoneDetails')->with('phone', $phone);
    }

    function purchase($id): RedirectResponse
    {
        $phone = $this->phoneController->show($id);

        $this->handleError($phone);

        $response = $this->purchaseController->store($id, 'testUser');

        $this->handleError($response);

        return redirect('phone/'.$id)->with('message', 'Su compra se ha realizado con éxito.');
    }
}
