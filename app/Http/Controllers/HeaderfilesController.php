<?php

namespace App\Http\Controllers;

use App\Models\Headerfiles;
use Illuminate\Http\Request;

class HeaderfilesController extends Controller
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
        $reDbms= Headerfiles::where('userId','=',$userID)->get()->first();
        if($reDbms){
            echo htmlspecialchars_decode($reDbms);
            //  return view('Admin.headerForm')
                // ->with('data',$reDbms);
        }else {
            // return view('Admin.headerForm');   
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
            'headerfiles'=>'required',
            'footerfiles'=>'required',
        ]);
      
         
        $reDbms=new Headerfiles;        
        $reDbms->headerScript=$request->headerfiles;
        $reDbms->footerScript=$request->footerfiles;
        $reDbms->pageId=Pagemain::userPageId();
        
        //Sesion id :get | Hold Parent or session Information
        $agent = new Usersession;
        $reDbms->userId = $agent->getSessionId();
        $res=$reDbms->save();

        if($res=="1"){
       return redirect()->back()->with('message','Completed !');     
    }    
          else {
            return redirect()->back()->with('Error','Sorry Somehing bad Happen !');
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Headerfiles  $headerfiles
     * @return \Illuminate\Http\Response
     */
    public function show(Headerfiles $headerfiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Headerfiles  $headerfiles
     * @return \Illuminate\Http\Response
     */
    public function edit(Headerfiles $headerfiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Headerfiles  $headerfiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Headerfiles $headerfiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Headerfiles  $headerfiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Headerfiles $headerfiles)
    {
        //
    }
}
