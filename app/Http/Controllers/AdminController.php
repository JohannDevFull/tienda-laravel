<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $value = session('auth');

        if ( $value == 'true' ){
            return view('admin.dashboard');
        }else{
            return view('sitio.inicio');
        }

    }

    public function auth()
    {
        session(['auth' => 'true']);
    }

    public function authClose()
    {
        session(['auth' => 'false']);
    }
}
