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

        $this->handleError($phones);

        return view('main.index')->with('phones', $phones);
    }

    function phoneDetails($id): View
    {
        $phone = $this->phoneController->show($id);

        $this->handleError($phone);

        return view('main.phoneDetails')->with('phone', $phone);
    }



}
