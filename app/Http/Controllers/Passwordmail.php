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
    public function sendEmailReminder() {
   //      $data = array('name'=>"Vicky Chhetri");
   //      Mail::send('Guest.mail', $data, function($message) {
   //         $message->to('vickychhetri4@gmail.com', 'Tutorials Point')->subject
   //            ('Laravel HTML Testing Mail');
   //         $message->from('password-recovery@urprofile.in','Virat Gandhi');
   //      });
   //      echo "HTML Email Sent. Check your inbox.";
   //   }
   $details = [
      'title' => 'Mail from ItSolutionStuff.com',
      'body' => 'This is for testing email using smtp'
  ];
 
  \Mail::to('vikedihost@gmail.com')->send(new \App\Mail\MyTestMail($details));
 
  dd("Email is Sent.");
}
}