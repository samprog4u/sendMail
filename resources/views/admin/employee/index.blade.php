
@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Simple Tables
        <small>preview of simple tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Employee</h3>
              <div class="row box-body" style="padding-left : 25px; margin-top: 20px">
                 <a href="{{ url('/admin/employee/create') }}" class="btn btn-primary"> Tambah Employee</a>
              </div>
              <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Telepon</th>
                    <th>Action</th>
                  </tr>
                <tr>
              </thead>
              <tbody>
                @foreach ($employee as $key)
                <tr>
                    <td>{{ $key->id }}</td>
                    <td>{{ $key->name }}</td>
                    <td>{{ $key->email }}</td>
                    <td>{{ $key->address }}</td>
                    <td>{{ $key->telepon }}</td>
                    <td>
                        <a href="{{url('admin/employee')}}/{{ $key->id}}/edit" class="btn btn-default"><i class="fa fa-edit" style="color: green"></i> Edit</a>
                        <a href="{{url('admin/employee/destroy')}}/{{ $key->id}}" class="btn btn-default"><i class="fa fa-minus-circle" style="color: red"></i> Hapus</a>
                      <!--   <a href="#" onclick="
                                $().ready(function(e){
                                swal({
                                  title : 'Are you sure?',
                                  text : 'You will not be able to recover this object',
                                  type : 'warning',
                                  showCancelButton : true,
                                  confirmButtonColor: '#DD6B55',
                                  confirmButtonText: 'Yes, delete it!',
                                  cancelButtonText: 'No, cancel it!',
                                  closeOnConfirm: false,
                                  closeOnCancel: false,
                                  showLoaderOnConfirm : true
                                },
                                  function(isConfirm){
                                    if(isConfirm){
                                      $.get('<?php echo url('admin/employee/delete').'/'.$key->id?>', function(){
                                          swal({
                                            title : 'Deleted!',
                                            text : 'Your news has been deleted!',
                                            type : 'success'
                                          },function(){
                                            location.reload() ;
                                          });
                                      }) ;
                                    }else{
                                      swal('Cancelled', 'Your news is safe :)', 'error');
                                    }
                                  }
                                )

                              })">Delete</a> -->
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>                 
          <!-- /.box -->    
            </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection