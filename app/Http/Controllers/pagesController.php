<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,Image;
use Illuminate\Support\Facades\Storage;
Use App\File;
Use DB;

class pagesController extends Controller
{
    public function teacher()
    {
       
        return view('teachersDashboard');
    }
    public function courseupload()
    {
       
        return view('teacher.courseupload');
    }

    public function create()
    {
        //return view('pages.createfile');
    }

    public function store(Request $request)

    {
        // file validation
        //$validator = request()->validate(['filename' => 'required|mimes:jpeg,png,jpg,bmp|max:2048']);
        $validator      =   Validator::make($request->all(),
        ['filename'      =>   'required|mimes:jpeg,png,zip,jpg,bmp,txt,docx,pdf'
        
        ]);

        // $product = new File($request->input());

        // if validation fails
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
               $fileupload = new File(); 

               $fileupload->title = $request->input('title');
               // Set other properties
               
               $file = $request->file('filename');
               $filename = time().time().'.'.$file->getClientOriginalExtension(); 
               $file->storeAs('/uploads/', $filename);
               
               $fileupload->filename = $filename;
               
               $fileupload->save();
            
                return redirect('/file')->with("success", "File uploaded successfully");
          
        
       
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
