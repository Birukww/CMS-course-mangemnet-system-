<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
	return view('welcome');
});

Route::get('/hello','customersController@index');
Route::get('/about','customersController@about');
Route::get('/services','customersController@services');
Route::post('/services','customersController@store');

//Route::get('/image', 'ImageController@index');
//Route::post('/save', 'ImageController@save');
//file upload
//Route::get('/file', 'FileController@create');
Route::get('/file', 'FileController@index');
Route::get('/file/upload', 'FileController@create');
Route::post('/file/upload','FileController@store');
Route::delete('file/{id}','FileController@destroy');
Route::get('/file/download/{id}', 'FileController@show');
/*
//dynamic routing
Route::get('/users/{id}' ,function($id){
	return 'This is user '.$id;
});

Route::get('/users/{id}/{name}' ,function($id,$name){
    return 'This is the user '.$name.'with an id of'.$id;
});






from <pages>
<index class="php"><div class="row">
        @foreach($files as $file)
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 m-auto p-2">
            <div class="card shadow">
                <div class="card-body">
                    <img src="/uploads/{{ $file->filename }} " class="img-fluid img-thumbnails">
                </div>
            </div>
        </div>
        @endforeach
    </div></index>
*/

Route::get('/home','coursesController@show');

Route::get('/login','LoginController@');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
