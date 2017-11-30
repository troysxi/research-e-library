<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $records = Record::latest('created_at')->paginate(5);
      return view('record.index',compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
                  \Session::flash('flash_message','To download present your id to the research office');
      $records = $request->get('q');
      $req = Record::latest('created_at')->where('Title','like','%' .$records. '%')
                                         ->orWhere('Faculty','like','%'.$records. '%')
                                         ->orWhere('id','like','%'.$records.'%')
                                          ->orWhere('created_at','like','%'.$records.'%')
                                        ->get();
      return view('record.index',['records' => $req]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('record.create');
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
              'Faculty'=>'required|max:255',
              'Researcher'=>'required|max:500',
              'Abstract'=>'required|max:10000'
            ]);


            $record = Record::create([
              'Title'=> $request->Title,
              'Faculty' => $request->Faculty,
              'Researcher'=> $request->Researcher,
              'Abstract'=> $request->Abstract,
              'created_at'=> $request->created_at
            ]);

            return redirect()->route('upload.file', $record);
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $records = Record::find($id);
      return view('record.show',['records' => $records]);
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
