<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userpagebase;
class Uservalidajax extends Controller
{
    public function index(Request $request) {
        $data=Userpagebase::where('userName','=',$request->username)->get()->first();
        if(isset($data)){
            if($data->count()==1){
                return response()->json(array('msg'=> 'Not Available'), 200);
            }
        }
        return response()->json(array('msg'=> $request->username), 200);
     }
}
