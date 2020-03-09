<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Illuminate\Support\Facades\Storage;
Use App\course_material;
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
        $files  =   course_material::all();
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
        ['filename'      =>   'required|mimes:jpeg,png,zip,jpg,bmp,txt,docx,pdf',
        'title'      =>   'required',   'course_code'      =>   'required'
       
        
        ]);

        // $product = new File($request->input());

        // if validation fails
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
               $fileupload = new course_material(); 

               $fileupload->title = $request->input('title');
               // Set other properties
               
               $file = $request->file('filename');
               $filename = time().time().'.'.$file->getClientOriginalExtension(); 
               $file->storeAs('/uploads/', $filename);
               
               $fileupload->filename = $filename;
              $fileupload->course_code = $request->input('course_code');
              $fileupload->description = $request->input('description');
               
               
               $fileupload->save();
            
                return redirect('/file')->with("success", "File uploaded successfully");
          
        
       
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
