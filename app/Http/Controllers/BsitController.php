<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bsit;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BsitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bsits = Bsit::all();
      return view('bsit.index',['bsits' => $bsits ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bsit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'Title'=>'required|max:255',
        'Faculty_Involved'=>'required|max:255',
        'Researchers'=>'required|max:500',
        'Abstract'=>'required|max:10000'
      ]);

      $bsits = new Bsit();
      
      $bsits->Title= $request->Title;
      $bsits->Faculty_Involved= $request->Faculty_Involved;
      $bsits->Researchers= $request->Researchers;
      $bsits->Abstract= $request->Abstract;

      $bsits->save();

      \Session::flash('flash_message','Your Research Title has been added!');

      return redirect()->route("bsit.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $bsits = Bsit::find($id);
      return view('bsit.show',['bsits' => $bsits]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
