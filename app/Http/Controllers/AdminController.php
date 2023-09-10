<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    function index()
    {
        return 1;
    }

    function validateAdmin(Request $request): RedirectResponse
    {
        $password = $request['password'];

        if($password === env('ADMIN_PASSWORD')){
            $authCookie = cookie('isAdmin', env('ADMIN_PASSWORD'), 60);

            return redirect('admin')->cookie($authCookie);
        }else return redirect()->back();
    }
}
