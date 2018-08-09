
@extends('layouts.admin')
@section('title', 'Admin | Create Employee')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/user') }}"><i class="fa fa-table"></i> Employee</a></li>
        <li class="active">Create Employee</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
       
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-10">
          <!-- Horizontal Form -->
          <div class="box box-info">
            {!! Form::open(array('route' => 'employee.store', 'enctype' => 'multipart/form-data')) !!}
            
            <div class="box-header with-border">
              
              <h3 class="box-title">Add Employee</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label" style="margin:10px">Name</label>

                  <div class="col-sm-9 " style="margin:10px">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  </div>
                </div>

                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label" style="margin:10px">Email</label>

                    <div class="col-sm-9" style="margin:10px">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="address" class="col-sm-2 control-label" style="margin:10px">Address</label>

                    <div class="col-sm-9" style="margin:10px">
                      <textarea placeholder="Address" class="form-control" id="address" name="address" type="text" ></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="telepon" class="col-sm-2 control-label" style="margin:10px">Telepon</label>

                    <div class="col-sm-9" style="margin:10px">
                      <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepoon">
                    </div>
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Add Data</button>
              </div>
              <!-- /.box-footer -->
            
            {!! Form::close() !!}
          </div>
         
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection