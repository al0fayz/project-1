@extends('admin.layout.master')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Desa</li>
          </ol>
@stop
@section('content')
<div class="row">
            <div class="col-md-6">
                @if(count($errors))
					<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.
					<br/>
					<ul>
						@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
				</ul>
				</div>
				@endif
				<?php foreach ($desa as $desa);  ?>
                <div class="box box-primary">
                  <div class="box-header">
                    <h3 class="box-title">Edit Pegawai </h3>
                  </div><!-- /.box-header -->
                  <div class="box-body no-padding">
				 
                      <form id="menutambah" class="form-horizontal" role="form" method="POST" action="{{ url('/desa/'.$desa->id.'/update') }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      
                     
                      <div class="form-group {{ $errors->has('nama_desa') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Nama Desa</label>
                          <div class="col-md-6 ">
                              <input type="text" class="form-control" name="nama_desa" value= "{{ $desa->nama_desa }}">
							  <span class="text-danger">{{ $errors->first('nama_desa') }}</span>
                          </div> 
                      </div>
   
                      <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Alamat</label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="alamat" value="{{ $desa->alamat }}">
							   <span class="text-danger">{{ $errors->first('alamat') }}</span>
                          </div>
                      </div>
   
                      <div class="form-group {{ $errors->has('no_telp') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">No Telp</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="no_telp" value="{{ $desa->no_telp }}">
							   <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                          </div>
                      </div>
					 
                      <div class="form-group {{ $errors->has('kode_pos') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Kode Pos</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="kode_pos" value="{{ $desa->kode_pos }}">
							   <span class="text-danger">{{ $errors->first('kode_pos') }}</span>
                          </div>
                      </div>
					
					  <div class="form-group">
                          <label class="col-md-4 control-label">Icon</label>
                          <div class="col-md-6 ">
                              <input type=file  name="icon" value= "{{ $desa->icon }}">
                          </div>
                      </div>
   
					  
   
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary" id="button-reg">
                                  Simpan
                              </button>

                              
                              <a href="{{{ action('desacontroller@index') }}}" title="Cancel">
                              <button type="button" class="btn btn-default" id="button-reg">
                                  Cancel
                              </button>
                              </a>  
                          </div>
                      </div>
                      </form>   
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
          </div><!-- /.row (main row) -->
            
@endsection

