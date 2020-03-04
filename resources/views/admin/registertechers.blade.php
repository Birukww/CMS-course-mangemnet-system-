 @extends('adminDashboard')

@section('content')
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0 text-dark">ናይ ኣባላት ዝርዝር</h1> -->

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"> <a href="{{url('/')}}">dashboard</a> </li>
                        <li class="breadcrumb-item active">teachers</li>
                    </ol>
                </div>
            </div>
        </div>

    </div>
  
<section class="content">
  <div class="container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
          <div class="container">
            
  <!-- Trigger the modal with a button -->
  <a href="#" class="create-modal">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">teachers register</button>
</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">techer register</h4>
        </div>
        <form action="">
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        <div class="modal-body">
 
              <div class="form-group">
              <label class="col-md-3 control-label" for="birthPlace">first name</label>
              <div class="col-md-6">
                <input id="" name="" type="text" placeholder="" class="form-control" value=""></div>
              </div>
              <br>
              <br>
              <div class="form-group">
              <label class="col-md-3 control-label" for="birthPlace">middle name</label>
              <div class="col-md-6">
                <input id="" name="" type="text" placeholder="" class="form-control" value=""></div>
              </div>
              <br>
              <br>
             
                <div class="form-group">
                <label class="col-md-3 control-label" for="dob">last name</label>
                <div class="col-md-6">
                  <input id="" name="" type="text" placeholder="" class="form-control" value=""></div>
                </div>
                <br>
                <br>
                 <div class="form-group">
                <label class="col-md-3 control-label" for="dob">sth</label>
                <div class="col-md-6">
                  <input id="" name="" type="text" placeholder="" class="form-control" value=""></div>
                </div>
                <br>
                <br>
                 <div class="form-group">
                <label class="col-md-3 control-label" for="dob">sth</label>
                <div class="col-md-6">
                  <input id="" name="" type="text" placeholder="" class="form-control" value=""></div>
                </div>
                <br>
                <br>
                 
      <tr>
        <div class="modal-footer">
          <button type="button" id="edit" class="btn btn-primary">edit</button>
        
       
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
        </div>
      </tr>
      </div>
    </form>
      
    </div>
  </div>
  
</div>

            <!-- <p>
                <a href="{{url('/register')}} " class="btn btn-primary"> ኣባላት መዝግብ</a>
            </p> -->
            <table class="table table-bordered table-striped">
                <tr>
                    <th>first name</th>
                    <th>middle name</th>
                    <th>last name</th> 
                    <th>course_id</th>
                    <th>departement_id</th>
                    <th>edit</th>
                    <th class="col-xs-4">delete</th>
                </tr>
               <tr>
                 
               </tr>
            </table>
        </div>
    </div>
</div>
    </section>



 @endsection

 <!-- @section('scrip') -->