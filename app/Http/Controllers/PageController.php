<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Usersession;
use Illuminate\Support\Facades\DB;
use App\Models\Imagecollection;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = new Usersession;
        $userID = $agent->getSessionId();   
        $reDbms= Page::where('userId','=',$userID)->get()->first();
        if($reDbms){
            return view('Admin.home')
            >with('data',$reDbms);
        }else {
            return view('Admin.home');
        }
        
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
            'title'=>'required',
            'thumbnailimage'=>'required|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:2048',
            'pagetypestoCreate'=>'required',
            'tags'=>'required',
            'shortdescription'=>'required',
            'mytextarea'=>'required',
        ]);
        $pagename1= strtolower(PageController::create_slug($request->title));
       
        $postCat=1;
        if($request->pagetypestoCreate!=null){
            $postCat=$request->pagetypestoCreate;
        }
        $reDbms= new Page;
        $pagenamenewafter="getlink-".time()."-".$pagename1;
         $pagenamenewafter=$pagename1;
        $reDbms->pageName=$pagenamenewafter;
        $reDbms->title=$request->title;
        $reDbms->visible=1;
        $reDbms->keywords=$request->tags;
        $reDbms->typePage=$postCat;
        
        $reDbms->description=$request->shortdescription;
        $reDbms->content=$request->mytextarea;
        $newImageName= $pagenamenewafter.'-'.time().'.'.$request->thumbnailimage->extension();
        $reDbms->thumbnail =$newImageName;

        //Sesion id :get | Hold Parent or session Information
        $agent = new Usersession;
        $reDbms->userId = $agent->getSessionId();
        $res=$reDbms->save();
        if($res=="1"){
       $request->thumbnailimage->move(public_path('UserThumbImages'),$newImageName);
       return redirect()->back()->with('message','Completed !');     
    }    
          else {
            return redirect()->back()->with('Error','Sorry Somehing bad Happen !');
          }
    }

    public static function create_slug($string){
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
     }

     public function upload(Request $request){
        // $fileName=$request->file('file')->getClientOriginalName();
        $fileName="edi".rand().'-'.time().'.'.$request->file('file')->extension();
        $path=$request->file('file')->storeAs('uploads', $fileName, 'public');
        if($path){
            $agent = new Usersession;
            $userID = $agent->getSessionId();   
            $reDbms= new Imagecollection;
            $reDbms->images=$path;
            $reDbms->userId = $userID;
            $reDbms->SAVE();
        }
        return response()->json(['location'=>"/storage/$path"]); 
        
        /*$imgpath = request()->file('file')->store('uploads', 'public'); 
        return response()->json(['location' => "/storage/$imgpath"]);*/

    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
