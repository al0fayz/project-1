@extends('admin.layout.master')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Detail Pegawai</li>
          </ol>
@stop
@section('content')
          
          <div class="row">
            <div class="col-md-12">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Pegawai</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
				<?php foreach ($desa as $desa);  ?>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-3">
                      <p align="center">
					  <img src="{{ URL::asset('images/'.$desa->icon ) }}" alt="gambar desa" height="100px" width="65px">
                        <a class="users-list-name" href="#">{{ $desa->nama_desa }}</a>
                        <span class="users-list-date">{{ $desa->no_telp }}</span>
                      </p>
                    </div><!-- /.col -->
                    <div class="col-md-8">
                     <table id="data" class="table table-default table-hover">                    
                      <tbody>
                      
                        <tr>
                          <td>Nama Desa</td>
                          <td>{{ $desa->nama_desa }}</td>
                        </tr>
                        <tr>
                          <td>Alamat</td>  
                          <td>{{ $desa->alamat}}</td>
                        </tr>
                        <tr>
                          <td>No Telp</td> 
                          <td>{{ $desa->no_telp }}</td>
                        </tr>
                        <tr>
                          <td>Kode Pos</td> 
                          <td>{{ $desa->kode_pos }}</td> 
                        </tr>
                      </tbody>
                    </table>
					<div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
						  <a href="{{{ URL::to('desa/'.$desa->id.'/edit') }}}">
                              <button type="submit" class="btn btn-primary" id="button-reg">
                                  EDIT
                              </button></a>
                          </div>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
                 
              </div>
            </div>
                       
          </div><!-- /.row -->

@endsection

