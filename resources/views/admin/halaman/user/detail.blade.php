@extends('admin.layout.master')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Detail User</li>
          </ol>
@stop
@section('content')
          
          <div class="row">
            <div class="col-md-12">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Data User</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
				<?php foreach ($user as $user);  ?>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-3">
                      <p align="center">
					  @if(isset($user->foto))
                        <img src="{{ URL::asset('images/'.$user->foto ) }}">
					  @else
						@if($pegawai->jenis_kelamin == 'L')
						<img src="{{ URL::asset('images/avatar.png') }}">
						@else
					    <img src="{{ URL::asset('images/user.jpg') }}">
					 @endif
					  @endif
					  
                        <a class="users-list-name" href="#">{{ $user->username }}</a>
                        <span class="users-list-date">{{ $user->level }}</span>
                      </p>
                    </div><!-- /.col -->
                    <div class="col-md-8">
                     <table id="dataKurikulum" class="table table-default table-hover">                    
                      <tbody>
                      
                        <tr>
                          <td>ID</td>
                          <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                          <td>Nama Lengkap</td>  
                          <td>{{ $user->nama }}</td>
                        </tr>
                        <tr>
                          <td>Email</td> 
                          <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                          <td>No Telp</td> 
                          <td>{{ $user->no_telp }}</td> 
                        </tr>
                
                        
                      </tbody>
                    </table>
					<div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <a href="{{{ action('usercontroller@hapus',[$user->id]) }}}">
                              <button type="button" class="btn btn-danger" id="button-reg" onclick="return confirm('Anda yakin akan menghapus ini?')">
                                  HAPUS
                              </button>
                              </a>  

                              
                              <a href="{{{URL::to('/user')}}}" title="Cancel">
                              <button type="button" class="btn btn-primary" id="button-reg">
                                  CANCEL
                              </button>
                              </a>  
                          </div>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
                 
              </div>
            </div>
                       
          </div><!-- /.row -->

@endsection
@section('script')

  

@endsection

