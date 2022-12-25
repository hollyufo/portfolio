<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Contracts\Mail\Mailable;

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
            Mail::send('Html.view', $contact, function ($message) {
                $message->from('noreply@management.virtualprovision.ma', 'Portfolio');
                $message->sender('noreply@management.virtualprovision.ma', 'Portfolio');
                $message->to('chaibiimranA@gmail.com', 'Portfolio');
                $message->subject('Subject');
            });
            return redirect()->back()->with('toast_success', 'Your message has been sent successfully');
        }
    }
}
