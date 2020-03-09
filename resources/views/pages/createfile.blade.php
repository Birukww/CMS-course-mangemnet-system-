@extends('layouts.app2')
@section('title','about us page')
@section('content')
    <div class="container mt-5">
    <form action="{{url('/file/upload')}}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            
                    

            

                    <!-- print success message after file upload  -->
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="title">title</label>
                                <div class="col-md-6">
                            <input name="title" type="text" class="form-control" id="title" placeholder="file Title" required
                            value="{{ old('title') }}"></div></div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="course_code">course_code</label>
                                <div class="col-md-6">
                            <input name="course_code" type="text" class="form-control" id="course_code" placeholder="coourse code" required
                            value="{{ old('course_code') }}"></div></div>

                            <div class="form-group" {{ $errors->has('filename') ? 'has-error' : '' }}>
                                <label for="filename"></label>
                              
                                    <input type="file" name="filename" multiple id="filename" class="form-control">
                                    <span class="text-danger"> {{ $errors->first('filename') }}</span>
                            </div>  
                    </div>

                    <div class="card-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-md"> Upload </button>
                        </div>
                        {{ csrf_field() }}
                    </div>
                
        
    </form>
    </div>
@endsection