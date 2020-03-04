@extends('layouts.app2')
@section('title','view file')
@section('content')
<div class="container mt-5 border p-3">
    <div class="row pb-5">
        <div class="col-xl-12">
            <a href=" {{url('file/upload')}} " class="btn btn-success btn-sm float-right"> Add More </a>
        </div>
    </div>

    


    <div class="row">
        @foreach($files as $file)
        <div class="col-md-4">
            <div class="card">
                {{-- <img class="card-img-top" src="/uploads/{{ $file->filename }}"> --}}
                <a href='{{ asset("uploads/$file->filename") }}'>{{ $file->filename }}</a>
                <div class="card-body">
                    <strong class="card-title">{{$file->filename}}</strong>
                    <p class="card-text">{{$file->created_at->diffForHumans()}}</p>
                <form action="{{url('file/{id}')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">delete</button>
                <a href="uploads/{{$file->filename}}" download="$file->filename" class="btn btn-primary">download</a>
                </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>