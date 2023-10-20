<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request){
        $request->validate([
            "email"=>"required|email",
            "user"=>"required",
            "pwd"=>"required"
        ]);
    }
}
