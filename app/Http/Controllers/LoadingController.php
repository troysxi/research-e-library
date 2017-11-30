<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loading');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->ajax()){
          $output="";

          $items=Item::table('items')->where('Title','LIKE','%'.$request->search.'%')->orWhere('Faculty_Involved','LIKE','%'.$request->search.'%')->orWhere('id',$request->search)->get();
          if ($items)
          {
            foreach($items as $key => $items){
              $output.='<tr>'.
                        '<td>'.$items->id.'</td>'.
                        '<td>'.$items->Title.'</td>'.
                        '<td>'.$items->Faculty_Involved.'</td>'.
                        '<td>'.$items->created_at.'</td>'.
                        '</tr>';
                      }
                      return Response($output);
                      }

              }
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
