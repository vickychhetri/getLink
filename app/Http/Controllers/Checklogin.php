<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Checklogin extends Controller
{
    public function index(){
        return view('Guest.Login');
    }

    public function StartSessionLogin(Request $request){
        $request->validate([
            'username' => 'required',
            'password'=>'required'
        ]);
        $user = $request->username;
        $pwd = $request->password;
        $res = DB::table('userpagebases')
            ->select('userpagebases.*')
            ->where('userpagebases.userName', '=', $user)
            ->get();
        if ($res->count() < 1) {
            return redirect()->back()->with('message', 'Invalid Username !');
        }

    $hashedPassword=$res[0]->password;
                #REMOVED HASH CODE TO CHECK PASSWORD 
               // if (Hash::check($pwd, $hashedPassword)) {
                if ($pwd==$hashedPassword) {
                Session()->put('userId', $res[0]->id);
                Session()->put('username', $res[0]->userName);
                Session()->put('firstname', $res[0]->firstName);
                Session()->put('lastname', $res[0]->lastName);
                Session()->put('email', $res[0]->email);
                Session()->put('mobile', $res[0]->mobile);
                Session()->put('created_at', $res[0]->created_at);
                //everything is ok and now we are moving towards the dashboard 
                return redirect("/dashboard");
        } else {
            Session()->forget('username');
            Session()->forget('password');
            return redirect()->back()->with('message', 'Wrong password');
        }
    }
}
