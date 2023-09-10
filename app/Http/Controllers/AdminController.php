<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
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

        return view('admin.index')->with('phones', $phones);
    }

    function purchases(): View
    {
        $purchases = $this->purchaseController->index();

        $this->handleError($purchases);

        return view('admin.purchases')->with('purchases', $purchases);
    }

    function createPhone(Request $request): RedirectResponse
    {

        $data = [
            'name' => $request['name'],
            'photoUrl' => $request['photoUrl'],
            'price' => $request['price'],
            'description' => $request['description'],
        ];

        $response = $this->phoneController->store($data);

        $this->handleError($response);

        return redirect('admin/phones')->with('message', 'El teléfono se ha creado con éxito.');
    }

    function deletePhone($id): RedirectResponse
    {
        $response = $this->phoneController->destroy($id);

        $this->handleError($response);

        return redirect('admin/phones')->with('message', 'El teléfono se ha borrado exitosamente.');
    }

    function validateAdmin(Request $request): RedirectResponse
    {
        $password = $request['password'];

        if($password === env('ADMIN_PASSWORD')){
            $authCookie = cookie('isAdmin', env('ADMIN_PASSWORD'), 60);

            return redirect('admin/phones')->cookie($authCookie);
        }else return redirect('admin')->with('message', 'La contraseña es errónea.');
    }
}
