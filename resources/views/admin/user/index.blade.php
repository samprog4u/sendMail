
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
              <h3 class="box-title">Data User</h3>
                <div class="row box-body" style="padding-left : 25px; margin-top: 20px">
                 <a href="{{ url('/admin/user/create') }}" class="btn btn-primary"> Tambah User</a>
                </div>

              <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th >Action</th>
                  </tr>
                <tr>
              </thead>
              <tbody>
                @foreach ($user as $key)
                <tr>
                    <td>{{ $key->id }}</td>
                    <td>{{ $key->name }}</td>
                    <td>{{ $key->email }}</td>
                    <td>
                        <a href="{{url('admin/user')}}/{{ $key->id}}/edit" class="btn btn-default"><i class="fa fa-edit" style="color: green"></i> Edit</a>
                        <a href="{{url('admin/user/destroy')}}/{{ $key->id}}" class="btn btn-default"><i class="fa fa-minus-circle" style="color: red"></i> Hapus</a>
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