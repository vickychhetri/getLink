<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Models\Userpagebase;
class Passwordmail extends Controller
{
    // public function sendEmailReminder(Request $request, $id)
    // {
    //     $user = Userpagebase::findOrFail($id);
 
    //     Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
    //         $m->from('password-recovery@vickychhetri.com', 'urProfile.in');
 
    //         $m->to($user->email, $user->name)->subject('Welcome');
    //     });
    // }
    public function sendEmailReminder($email) { 
      $user = Userpagebase::where('email','=',$email)->get()->first();
   $details = [
      'title' => 'urProfile.in | Login Information',
      'body' => 'Login',
      'username'=>$user->userName,
      'password'=>$user->password,
      'firstname'=>$user->firstName,
      'lastname'=>$user->lastName,
      'mobile'=>$user->mobile,
      'email'=>$user->email

  ];
 
  \Mail::to($email)->send(new \App\Mail\MyTestMail($details));
 
  dd("Email is Sent.");
}
}