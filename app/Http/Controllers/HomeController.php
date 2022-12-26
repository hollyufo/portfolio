<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class HomeController extends Controller
{
    // return the main page
    public function index()
    {
        return view('main');
    }
    // to send the email
    public function mailContactForm(Request $request){
        // checking the validation
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->with('toast_error', 'Please fill in all the fields');
        }else{
            $contact = [
                'name' => $request['name'],
                'email' => $request['email'],
                'message' => $request['message'],
            ];
            // saving the message to the database
            Contact::create($contact);
            return redirect()->back()->with('toast_success', 'Your message has been sent successfully');
        }
    }
}
