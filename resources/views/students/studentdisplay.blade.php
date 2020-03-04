 @extends('studentsDashboard')

@section('content')
<!-- Content Header (Page header) -->

    <div class="content-header">
    	<div class="container-fluid">
    		<div class="row mb-2">
    			<div class="col-sm-6">
    				<h1 class="m-0 text-dark">list of students</h1>

    			</div>
    			<div class="col-sm-6">
    				<ol class="breadcrumb float-sm-right">
    					<li class="breadcrumb-item"> <a href="{{url('/students')}}">dash board</a> </li>
    					<li class="breadcrumb-item active"> </li>
    				</ol>
    			</div>
    		</div>
    	</div>

    </div>

    <section class="content">


    <div class="container">
        <div class="row">
    	<div class="container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <div class="col-md-6" align="right">
                
            <form action="/childrensearch" method="get" role="search">
            {{ csrf_field() }}
            <div class="input-group col-md-4" align="right">
                <input type="text" class="col-md-2 form-control" name="search"
                    placeholder="Search users"> 
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>

                   
            </div>
    		<p>
    			<a href="{{url('/studentsregister')}} " class="btn btn-primary">students register</a>
    		</p>
            <div class="table-responsive">
    		<table class="table table-bordered table-striped" id="table11">
                
                <tr>
                    <th>id</th>
                    <th>first_name</th>
                    <th>middle_name</th>
                    <th>last_name</th>
                     <th>address</th>
                    <th>course_id</th>
                    <th>edit</th>
                    <th class="col-xs-4">delete</th>
                </tr>
               
                <tr>
                 
                </tr>
              
         
                
    		</table>
    	</div>
    </div>
    </div>
</div>
</div>
</div>


 @endsection

 <!-- @section('scrip') -->