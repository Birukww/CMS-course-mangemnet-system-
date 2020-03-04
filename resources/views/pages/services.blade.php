@extends('layouts.app2')
@section('content')
<p>this is service page</p>
<form action="/services" method="POST">
    <input type="text" name="name" autocomplete="off">
    @csrf
    <button>add service</button>
</form>
<p style="color:red ">@error('name'){{$message}}@enderror</p>
 
<ul>
    @forelse($services as $service)
    <li>
        {{$service->name}}
    </li>
    @empty
    <li>no services available</li>
    @endforelse
</ul>
@endsection