<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $logins = Login::all();
      return view('logins.index',['logins' => $logins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('logins.create');
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
        'username'=>'required|max:255',
        'password'=>'required|max:255'
      ]);

      $logins = new Login();

      $logins->username= $request->username;
      $logins->password= $request->password;

      $logins->save();

      \Session::flash('flash_message','Your Account has been added!');

      return redirect()->route("logins.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logins=Login::find($id);
        return view('logins.edit',compact('logins'));
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
      $logins=Login::find($id);
      $this->validate($request,[
        'username'=>'required',
        'password'=>'required'
      ]);

      $logins = new Login();

      $logins->username= $request->username;
      $logins->password= $request->password;

      $logins->save();

      \Session::flash('flash_message','Your Account has been added!');

      return redirect()->route("logins.index");
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
