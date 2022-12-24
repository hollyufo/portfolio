<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // return the main page
    public function index()
    {
        return view('main');
    }
    // to send the email
    public function mailContactForm(){
        // check if the all the inputs are filled
    }
}
