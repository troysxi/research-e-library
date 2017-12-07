<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Record;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $record = Record::find($id);

        return view('upload.upload', compact('record'));
        //return $request->all();
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $record = Record::find($id);

        if ($request->hasFile('file')) {

            $filename = $request->file->getClientOriginalName();
            $filesize = $request->file->getClientSize();

            $request->file->move(public_path('upload'), $filename);

            $record->file()->create([
                'name' => $filename,
                'size' => $filesize,
            ]);

            $files = File::all();

            return redirect()->route('home');
        }

        return redirect()->back()->with('error', 'invalid file');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
