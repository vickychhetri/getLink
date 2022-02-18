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
 
    //         $m->to($user->email, $user->name)->subject('Your Reminder!');
    //     });
    // }
}
