<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Headerfiles;
use Illuminate\Support\Facades\DB;
use Exception;
class Pagemain extends Controller
{
     public function show($username)
    {
        try {
            $HFScrpts= DB::table('headerfiles')
            ->join('userpagebases', 'headerfiles.userId', '=', 'userpagebases.id')
            ->select('headerfiles.*')
            ->where('userpagebases.userName', '=', $username)
            ->get();
          
        $usernamePage = DB::table('pages')
        ->join('userpagebases', 'pages.userId', '=', 'userpagebases.id')
        ->select('pages.*', 'userpagebases.firstName','userpagebases.lastName','userpagebases.mobile','userpagebases.userName')
        ->where('userpagebases.userName', '=', $username)
        ->get();
        if(isset($usernamePage)){
            if($usernamePage->count()>0){
                return view('template.username')
                ->with('pageData',$usernamePage)
                ->with('headers',$HFScrpts);  
            }else {
                return view('template.blank');     
            }
            
        }else {
            return view('template.blank');
        }
       
    }catch(Exception $e){

    }

    }


    public static function userPageId(){
        try {
              //Sesion id :get | Hold Parent or session Information
            $agent = new Usersession;
            $userID= $agent->getSessionId();
            
            $usernamePage = DB::table('pages')
            ->where('userId', '=', $userID)
            ->get()
            ->first();
            return  $usernamePage->id;
            
        }catch(Exception $e){
    
        }

    } 
 


}