
 @extends('studentsDashboard')
 @section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
    	<div class="container-fluid">
    		<div class="row mb-2">
    			<div class="col-sm-6">
    				<h1 class="m-0 text-dark"></h1>

    			</div>
    			<div class="col-sm-6">
    				<ol class="breadcrumb float-sm-right">
    					<li class="breadcrumb-item"> <a href=""></a> </li>
    					<li class="breadcrumb-item active"></li>
    				</ol>
    			</div>
    		</div>
    	</div>

    </div>

    
<div class="box">
<div id="myTabContent" class="main_container" >

<section class="content">
    <div class="container">
    	<div class="jumbotron">
    		<form method="post" action="" enctype="multipart/form-data">
                <div class="col-md-5">
        <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">register students</h3>
        </div>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        <div class="box-body">
                  {{ csrf_field() }}
          <div class="form-group">
            <div class="row">
              <label class="col-md-3">sth</label>
              <div class="col-md-6"><input type="number" name="code" class="form-control"> </div>
              <div class="clearfix"></div>
            </div>

          </div>
        <div class="form-group">
          <div class="row">
            <label for="name" class="col-md-3">first name:</label>
            <div class="col-md-6"><input type="text" class="form-control" id="name" name="name"></div>
        </div>
      </div>
        <div class="form-group">
            <div class="row">
              <label class="col-md-3">middle name</label>
              <div class="col-md-6"><input type="text" name="fname" class="form-control"> </div>
              <div class="clearfix"></div>
            </div>

          </div>
          <div class="form-group">
            <div class="row">
              <label class="col-md-3">last name</label>
              <div class="col-md-6"><input type="text" name="gfname" class="form-control"> </div>
              <div class="clearfix"></div>
            </div>
            
          </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">email</label>
                        <div class="col-md-6"><input type="text" name="mname" class="form-control"> </div>
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
                <div class="form-group">
                <div class="row">
                 <label class="control-label col-md-2 col5sm-2 col-xs-12">gender</label>
                  <div class="col-md-4 col-sm-7 col-xs-12">
                  <label  class="radio-inline">
                    <input type="radio" name="gender" id="male" value="M" checked="checked" required>
                    M
                  </label>
                  <label  class="radio-inline">
                    <input type="radio" name="gender" id="female" value="F" required>
                    F
                  </label>
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">password</label>
                        <div class="col-md-6"><input type="text" name="rbirr" class="form-control"> </div>
                        <div class="clearfix"></div>
                    </div>
                    </div>
                    <div class="form-group">
            <div class="row">
              <label class="col-md-3">confirm password</label>
              <div class="col-md-6"><input type="text" name="fname" class="form-control"> </div>
              <div class="clearfix"></div>
            </div>
                    <a href="#" class="create-modal">
           <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">register</button>
               </a>
                </div>
              
               

          
  </div>
</div>
</div>
</form>
      </div>
        </div>
    		</section>	
    	</div>
  
</div>
    
 @endsection