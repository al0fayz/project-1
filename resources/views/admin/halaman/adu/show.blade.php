@extends('admin.layout.master')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Detail Berita</li>
          </ol>
@stop
@section('content')
          
          <div class="row">
            <div class="col-md-12">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Detail</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
				<?php foreach ($adu as $info);  ?>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-3">
                      <p align="center">
					  <img src="{{ URL::asset('images/'.$info->foto ) }}" alt="gambar" height="100px" width="65px">
                        <a class="users-list-name" href="#">{{ $info->tanggal }}</a>
                        <span class="users-list-date">{{ $info->nik }}</span>
                      </p>
                    </div><!-- /.col -->
                    <div class="col-md-8">
                     <table id="data" class="table table-default table-hover">                    
                      <tbody>
                      
                        <tr>
                          <td>Tanggal</td>
                          <td>{{ $info->nik }}</td>
                        </tr>
                        <tr>
                          <td>Tentang</td>  
                          <td>{{ $info->tanggal }}</td>
                        </tr>
                        <tr>
                          <td>Isi</td> 
                          <td><p> {{ $info->isi }} </p></td>
                        </tr>
                      </tbody>
                    </table>
					<div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
						  <a href="{{{ action('aducontroller@hapus',[$info->id]) }}}">
                              <button type="button" class="btn btn-danger" id="button-reg" onclick="return confirm('Anda yakin akan menghapus ini?')">
                                  HAPUS
                              </button>
                              </a> 
							  <a href="{{{ action('aducontroller@index') }}}">
                              <button type="submit" class="btn btn-default" id="button-reg">
                                  CANCEL
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

