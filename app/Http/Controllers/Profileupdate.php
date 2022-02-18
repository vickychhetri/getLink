<?php

namespace App\Http\Controllers;
use App\Models\Imagecollection;
use Illuminate\Http\Request;

class Profileupdate extends Controller
{
    public function index()
    {
        return view('Admin.profile');
    }
    public function all_images()
    {
        $UserID=Session()->get('userId');
        // echo $UserID;
        $images=Imagecollection::where('id','=',$UserID)->get();
        return view('Admin.images')
        ->with('IMAGES',$images);
    }
}
