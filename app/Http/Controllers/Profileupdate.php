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
        $agent = new Usersession;
        $userID = $agent->getSessionId(); 
        $images=Imagecollection::where('userId','=',$userID)->get();
        return view('Admin.images')
        ->with('IMAGES',$images);
    }
    public function delete_image($id)
    {
        $agent = new Usersession;
        $userID = $agent->getSessionId(); 
        $images=Imagecollection::where('id','=',$id)->get()->first();
        
        if($userID==$images->userId){
            unlink(storage_path($images->images));
            $user = Imagecollection::find($id); $user->delete();
            
        }
    
        return redirect()->back();

    }
}
