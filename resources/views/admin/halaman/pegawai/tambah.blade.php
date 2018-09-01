@extends('admin.layout.master')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Pegawai</li>
          </ol>
@stop
@section('content')
<div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                  <div class="box-header">
                    <h3 class="box-title">Tambah Menu </h3>
                  </div>
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
                  <div class="box-body no-padding">
                      <form id="menutambah" class="form-horizontal" role="form" method="POST" action="{{ url('/pegawai') }}">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      
                      <div class="form-group {{ $errors->has('nik') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">NIK</label>
                          <div class="col-md-6 ">
                              <input type="text" class="form-control" name="nik" value="{{Request::old('nik')}}">
							  <span class="text-danger">{{ $errors->first('nik') }}</span>
                          </div> 
                      </div>
   
                      <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Nama Pegawai</label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="nama" value="{{Request::old('nama')}}">
							   <span class="text-danger">{{ $errors->first('nama') }}</span>
                          </div>
                      </div>
   
                      <div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Tempat Lahir</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="tempat_lahir" value="{{Request::old('tempat_lahir')}}">
							   <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Tanggal Lahir</label>
                          <div class="col-md-6 ">
                              <input type="text" class="tanggal form-control " name='tanggal_lahir' placeholder="tanggal">
							   <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Jenis Kelamin</label>
							<div class="col-md-6">
                              <select name="jenis_kelamin" class="form-control">
								<option value='L' selected="selected"> Laki-Laki </option>
								<option value='P'> Perempuan </option>
							</select>
							 <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
							</div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('agama') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Agama</label>
							<div class="col-md-6">
                              <select name="agama" class="form-control">
								<option value='Islam' selected="selected"> Islam </option>
								<option value='Kristen'> Kristen </option>
								<option value='Katolik'> Katolik </option>
								<option value='Hindu'> Hindu </option>
								<option value='Budha'> Budha </option>
								<option value='Lain-Lain'> Lain-Lain </option>
							</select>
							 <span class="text-danger">{{ $errors->first('agama') }}</span>
							</div>
                      </div>
					  
					   <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Status</label>
                          <div class="col-md-6 ">
                              <input type="text" class="form-control" name="status" value="{{Request::old('status')}}">
							   <span class="text-danger">{{ $errors->first('status') }}</span>
                          </div> 
                      </div>
   
                      <div class="form-group {{ $errors->has('jabatan') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Jabatan</label>
                          <div class="col-md-6 ">
                              <input type="text" class="form-control" name="jabatan" value="{{Request::old('jabatan')}}">
							   <span class="text-danger">{{ $errors->first('jabatan') }}</span>
                          </div>
                      </div>
   
                      <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Email</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="email" value="{{Request::old('email')}}">
							   <span class="text-danger">{{ $errors->first('email') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('no_telp') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">No Telp</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="no_telp" value="{{Request::old('no_telp')}}">
							   <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                          </div>
                      </div>
					  <div class="form-group">
                          <label class="col-md-4 control-label">Foto</label>
                          <div class="col-md-6 ">
                              <input type=file  name="foto" >
                          </div>
                      </div>
   
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary" id="button-reg">
                                  Simpan
                              </button>

                              
                              <a href="{{{ action('pegawaicontroller@index') }}}" title="Cancel">
                              <button type="button" class="btn btn-default" id="button-reg">
                                  Cancel
                              </button>
                              </a>  
                          </div>
                      </div>
                      </form>   
                  </div>
                </div>
            </div>
          </div>
            
@endsection
<script src="{{ URL::asset('admin/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>    
<script src="{{ URL::asset('admin/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript">
            $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>	

