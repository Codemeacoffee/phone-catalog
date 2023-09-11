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
        //Instantiate the controllers that manage the API connection
        $this->apiController = new ApiController();
        $this->phoneController = new PhoneController($this->apiController);
        $this->purchaseController = new PurchaseController($this->apiController);
    }

    function index(): View
    {
        //Get all phones and return a view to showcase them
        $phones = $this->phoneController->index();

        return view('admin.index')->with('phones', $phones);
    }

    function purchases(): View
    {
        //Get all purchases and return a view to showcase them
        $purchases = $this->purchaseController->index();

        return view('admin.purchases')->with('purchases', $purchases);
    }

    function createPhone(Request $request): RedirectResponse
    {
        //Create a data object that holds the new phone info
        $data = [
            'name' => $request['name'],
            'photoUrl' => $request['photoUrl'],
            'price' => $request['price'],
            'description' => $request['description'],
        ];

        //Create the new phone and return a view with a success message
        $this->phoneController->store($data);

        return redirect('admin/phones')->with('message', 'El teléfono se ha creado con éxito.');
    }

    function deletePhone($id): RedirectResponse
    {
        //Delete a phone by ID and return a view with a success message
        $this->phoneController->destroy($id);

        return redirect('admin/phones')->with('message', 'El teléfono se ha borrado exitosamente.');
    }

    function validateAdmin(Request $request): RedirectResponse
    {
        $password = $request['password'];

        //Check if the password is correct
        if($password === env('ADMIN_PASSWORD')){
            //Set a cookie to remember the admin for an hour (60 minutes)
            $authCookie = cookie('isAdmin', env('ADMIN_PASSWORD'), 60);

            //Redirect the admin to the control panel
            return redirect('admin/phones')->cookie($authCookie);
        }else{
            //Redirect the user back with an error message
            return redirect('admin')->with('message', 'La contraseña es errónea.');
        }
    }
}
