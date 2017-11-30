<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = Item::all();
      return view('items.index',['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
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

            $items = new Item();

            $items->Title= $request->Title;
            $items->Faculty_Involved= $request->Faculty_Involved;
            $items->Researchers= $request->Researchers;
            $items->Abstract= $request->Abstract;

            $items->save();

            \Session::flash('flash_message','Your Research Title has been added!');

            return redirect()->route("items.index");
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $items = Item::find($id);
      return view('items.show',['items' => $items]);
    }

    /*search*/

    public function search(Request $request)
    {
        if($request->ajax()){
          $output="";
          $items=DB::table('items')->where('Title','LIKE','%'.$request->search.'%')->orWhere('Faculty_Involved','LIKE','%'.$request->search.'%')->orWhere('id',$request->search)->get();
          if($items){
            $output.='<tr>'.
                      '<th>'.$items->id.'</td>'.
                      '<td>'.$items->Title.'</td>'.
                      '<td>'.$items->Faculty_Involved.'</td>'.
                      '<td>'.$items->Researchers.'</td>'.
                      '<td>'.$items->created_at.'</td>'.
                      '</tr>';
          }
          return Response($output);
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
