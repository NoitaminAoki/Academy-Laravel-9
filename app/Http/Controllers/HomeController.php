<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirectUser()
    {
        if (auth()->user()->hasRole('admin')){
            dd('admin');
        }

        if (auth()->user()->hasRole('user')){
            dd('user');
        }
    }
}
