<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,Image;
use Illuminate\Support\Facades\Storage;
Use App\File;
Use DB;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        // fetch all the images
        $files  =   File::all();
        return view('pages.index', compact('files'));
    }
    /*public function dindex() {
        $file = 'C:\xampp\htdocs\cms - Copy - Copy\public\uploads\15825477111582547711.docx';
        $name = basename($file);
        return response()->download($file, $name);
    }*/

    public function dindex($id)
{
    $report = $this->report->find($id);
    return response()->download($report->filepath, $report->name, ['Content-Type:' . $report->filemimetype]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createfile');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // file validation
        //$validator = request()->validate(['filename' => 'required|mimes:jpeg,png,jpg,bmp|max:2048']);
        $validator      =   Validator::make($request->all(),
        ['filename'      =>   'required|mimes:jpeg,png,zip,jpg,bmp,txt,docx,pdf']);

        // $product = new File($request->input());

        // if validation fails
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        // if validation success
        if($file   =   $request->file('filename')) {
        $name      =   time().time().'.'.$file->getClientOriginalExtension();
        $target_path    =   public_path('/uploads/');
            if($file->move($target_path, $name)) {
                // save file name in the database
                $file   =   File::create(['filename' => $name]);
            
                return redirect('/file')->with("success", "File uploaded successfully");
            }
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(files $id)
    {
        /*$d1=file::find($id);
        return storage::download($d1->path,$d1->filename);*/
        
       // return files::all();
        // $file = File::find($id);
        // $name = basename($file);
        // return response()->download($file, $name);

       // $report = $this->report->find($id);
   // return response()->download($report->filepath, $report->filename, ['Content-Type:' . $report->filemimetype]);
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
