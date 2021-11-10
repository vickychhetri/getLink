<?php

namespace App\Http\Controllers;

use App\Models\Userpagebase;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Exception;

class UserpagebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Guest.Register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'username'=>'required|min:5', 
            'password'=>'required',
            // 'pass1'=>['required','string','min:9',             // must be at least 10 characters in length
            // 'regex:/[a-z]/',      // must contain at least one lowercase letter
            // 'regex:/[A-Z]/',      // must contain at least one uppercase letter
            // 'regex:/[0-9]/',      // must contain at least one digit
            // 'regex:/[@$!%*#?&]/', 
            // must contain a special character
        // ],
            'phonenumber'=>'required',
            'terms'=>'accepted'
        ]);
        try {
         
    $database_agent= new Userpagebase;

    $database_agent->firstname=$request->firstname;
    $database_agent->lastname=$request->lastname;
    $database_agent->mobile=$request->phonenumber;
    $database_agent->email=$request->email;
    $database_agent->username=$request->username;
    //Make Hash of password 
   //echo $request->password;
    $hashedPassword = Hash::make($request->password);
    $database_agent->password= $hashedPassword;
    $database_agent->SAVE();
        } catch (QueryException $e) {    
            print($e);
    return redirect()->back()->with('Error', 'Error : Something went wrong  !');;

        }
 return redirect("/Login")->with('message', 'Account created Successfully  !');;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userpagebase  $userpagebase
     * @return \Illuminate\Http\Response
     */
    public function show(Userpagebase $userpagebase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userpagebase  $userpagebase
     * @return \Illuminate\Http\Response
     */
    public function edit(Userpagebase $userpagebase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Userpagebase  $userpagebase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userpagebase $userpagebase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userpagebase  $userpagebase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userpagebase $userpagebase)
    {
        //
    }
}
