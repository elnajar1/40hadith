<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\hadith;

class HadithController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    //read all hadiths add edite them
    public function admin()
    {
      
       return view('hadith.admin' , [ 'all_hadiths' => hadith::all()]);
    
    }
    
    public function index()
    {
      
       return hadith::all()->toJson();
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hadith.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        hadith::create([
          'order' =>  $request->input('order'),
          
          'title' =>  $request->input('title'),
          
          'head' =>  $request->input('head'), 
          
          'content' =>  $request->input('content'),
          
          'end' =>  $request->input('end'), 
          
          ]);
          
          return redirect('/hadith/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return hadith::where('id', $id)->get()->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(hadith $hadith)
    {
        return view('hadith.edit', [
        'hadith' => $hadith
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        hadith::find($id)->update([
          'order' =>  $request->input('order'),
          
          'title' =>  $request->input('title'),
          
          'head' =>  $request->input('head'), 
          
          'content' =>  $request->input('content'),
          
          'end' =>  $request->input('end'), 
          
          ]);
          
          return redirect('/hadith/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(hadith $hadith)
    {
      
      $hadith->delete();
      return redirect('/hadith/admin');
   
    }
}
