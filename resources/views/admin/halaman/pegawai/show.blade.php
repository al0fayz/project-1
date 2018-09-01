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
				<?php foreach ($pegawai as $pegawai);  ?>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-3">
                      <p align="center">
					  @if(isset($pegawai->foto))
                        <img src="{{ URL::asset('images/'.$pegawai->foto ) }}">
					  @else
						@if($pegawai->jenis_kelamin == 'L')
						<img src="{{ URL::asset('images/avatar.png') }}">
						@else
					    <img src="{{ URL::asset('images/user.jpg') }}">
					 @endif
					  @endif
                        <a class="users-list-name" href="#">{{ $pegawai->nama }}</a>
                        <span class="users-list-date">{{ $pegawai->nik }}</span>
                      </p>
                    </div><!-- /.col -->
                    <div class="col-md-8">
                     <table id="dataKurikulum" class="table table-default table-hover">                    
                      <tbody>
                      
                        <tr>
                          <td>ID</td>
                          <td>{{ $pegawai->id }}</td>
                        </tr>
                        <tr>
                          <td>Nama</td>  
                          <td>{{ $pegawai->nama }}</td>
                        </tr>
                        <tr>
                          <td>Tempat Lahir</td> 
                          <td>{{ $pegawai->tempat_lahir }}</td>
                        </tr>
                        <tr>
                          <td>Tanggal Lahir</td> 
                          <td>{{ $pegawai->tanggal_lahir }}</td> 
                        </tr>
                        <tr>
                          <td>Jenis Kelamin</td> 
                          <td>{{ $pegawai->jenis_kelamin }}</td>                        
                        </tr>
                         <tr>
                          <td>Agama</td> 
                          <td>{{ $pegawai->agama }}</td>
                        </tr>
                        <tr>
                          <td>Status</td> 
                          <td>{{ $pegawai->status }}</td> 
                        </tr>
                        <tr>
                          <td>Email</td> 
                          <td>{{ $pegawai->email }}</td>                        
                        </tr>
						<tr>
                          <td>No Telp</td> 
                          <td>{{ $pegawai->no_telp }}</td>                        
                        </tr>
                      </tbody>
                    </table>
					
					<div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
						  <a href="{{{ URL::to('pegawai/'.$pegawai->id.'/edit') }}}">
                              <button type="submit" class="btn btn-primary" id="button-reg">
                                  EDIT
                              </button></a>

                              
                              <a href="{{{ action('pegawaicontroller@hapus',[$pegawai->id]) }}}">
                              <button type="button" class="btn btn-danger" id="button-reg" onclick="return confirm('Anda yakin akan menghapus ini?')">
                                  HAPUS
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

