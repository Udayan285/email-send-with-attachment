<?php

namespace App\Http\Controllers;

use App\Mail\attachmail;
use App\Mail\welcomeemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    function sendEmail(){
       $users = [
        "udayannath31@gmail.com",
        "odoynnath@gmail.com",
        "mohoyantri28522@gmail.com"
       ];

       $message = "Hello user?";
       $subject = "Welcome to Moho";
    
       $details = [
        'name' => "Kona",
        'product' => "WatchA50",
        'price' => "15,999"
       ];


       foreach($users as $user){
        Mail::to($user)->send(new welcomeemail($message,$subject,$details));
       }

      // $req = Mail::to($toEmail)->send(new welcomeemail($message,$subject,$details));

      // dd($req);
    }
    
    function showContact(){
      return view('mail.mail-attach');
    }

    function sendContactForm(Request $request){
     
      $request->validate([
        'name' => 'required|max:20|min:5',
        'email' => 'required|email',
        'subject' => 'required|min:5|max:20',
        'message' => 'required|min:10|max:255',
        'attachment' => 'required|mimes:pdf,doc,docs,xls'
      ]);

      $fileName = time().'.'.$request->file('attachment')->extension();

      $request->file('attachment')->move('uploads',$fileName);

      $adminMail = "odoynnath@gmail.com";

      $response = Mail::to($adminMail)->send(new attachmail($request->all(),$fileName));
    
    
      if($response){
        return back()->with('success','Mail sent successfully');
      }else{
        return back()->with('fail','Mail not sent');
      }
    
    }
}
