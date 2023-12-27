<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Auth;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
  
  // public function __construct()
  // {
  //     $this->middleware('auth:admin');
  // }

    public function add_contact(Request $request){
      $validatedData = $request->validate([
        'name' => 'required|regex:/^[\pL\s]+$/u',
        'phone' => 'required|digits:10|numeric',
        'email' => 'required|email',
        'message_data' => 'nullable',
    ], [
        'name.required' => '*Name field is required.',
        'name.regex' => '*Name must contain alphabets and spaces only.',
        'phone.numeric' => '*Phone Number must contain numbers only.',
        'phone.digits' => '*Phone Number must be 10 digit numbers only.',
    ]);
    
    
    
    $data['created_at'] = \Carbon\Carbon::now();
    $data['updated_at'] = \Carbon\Carbon::now();
    $validatedData['message']=$request->message_data;
    $sendDetails=$validatedData;
    unset($validatedData['message_data']);
    // dd($validatedData);
    $data = Contact::create($validatedData);

      $recipients = ['lakshmi.zigainfotech@gmail.com'];
      // Mail::to('alwinregan.zigainfotech@gmail.com')->send(new ContactFormMail($validatedData));
      Mail::to(['alwinregan.zigainfotech@gmail.com'])->send(new ContactFormMail($sendDetails));

      $notification = [
        'message' => 'Given Message sent Successfully',
        'alert-type' => 'success'
    ];
    
    return redirect()->back()->with($notification);
  }
  
          
}
