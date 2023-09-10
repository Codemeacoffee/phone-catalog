<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    private ApiController $apiController;
    private PhoneController $phoneController;

    public function __construct()
    {
        $this->apiController = new ApiController();
        $this->phoneController = new PhoneController($this->apiController);
    }

    function index(): View
    {
        $phones = $this->phoneController->index();

        return view('index')->with('phones', $phones);
    }

    function phoneDetails($id): View
    {
        $phone = $this->phoneController->show($id);

        return view('phoneDetails')->with('phone', $phone);
    }
}
