<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userpagebase;
class Uservalidajax extends Controller
{
    public function index(Request $request) {
        $dataV=Userpagebase::where('userName','=',$request->id)
        ->get()
        ->first();
        
        if(isset($dataV)){
            if($dataV->count()>0){
                return response()->json(array('msg'=> '0'), 200);
            }
        }
        return response()->json(array('msg'=> '1'), 200);
     }
}
