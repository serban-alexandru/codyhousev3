<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class Site1Controller extends Controller
{
    public function index(){
        return view('site1/index');
    }
    
}
