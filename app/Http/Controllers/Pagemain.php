<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
class Pagemain extends Controller
{
     public function show($username)
    {
        try {
        $usernamePage = DB::table('pages')
        ->join('userpagebases', 'pages.userId', '=', 'userpagebases.id')
        ->select('pages.*', 'userpagebases.firstName','userpagebases.lastName','userpagebases.mobile','userpagebases.userName')
        ->where('userpagebases.userName', '=', $username)
        ->get()
        ->first();
  
        return view('template.username')
        ->with('pageData',$usernamePage);
        
    }catch(Exception $e){

    }

    }
 


}
