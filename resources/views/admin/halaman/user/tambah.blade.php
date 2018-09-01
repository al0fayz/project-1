@extends('admin.layout.master')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Administrator</li>
          </ol>
@stop
@section('content')
<div class="row">
            <div class="col-md-6">
                <div class="box-body flash-message" >
                    <a href="" class="uk-alert-close uk-close"></a>
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
                </div>
                <div class="box box-primary">
                  <div class="box-header">
                    <h3 class="box-title">Tambah User </h3>
                  </div><!-- /.box-header -->
                  <div class="box-body no-padding">
                      <form id="tambah" class="form-horizontal" role="form" method="POST" action="{{ url('/user') }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      
                      <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Username</label>
                          <div class="col-md-6  ">
                              <input type="text" class="form-control" name="username" value="">
							  <span class="text-danger">{{ $errors->first('username') }}</span>
                          </div> 
                      </div>
   
                      <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Password</label>
                          <div class="col-md-6 ">
                              <input type="Password" class="form-control" name="password" >
							  <span class="text-danger">{{ $errors->first('password') }}</span>
                          </div>
                      </div>
   
                      <div class="form-group {{ $errors->has('nama_lengkap') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Nama Lengkap</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="nama_lengkap" >
							  <span class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Email</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="email" >
							  <span class="text-danger">{{ $errors->first('email') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('no_telp') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">No Telp</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="no_telp" >
							  <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                          </div>
                      </div>
					  
					  
					  <div class="form-group {{ $errors->has('level') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Level</label>
							<div class="col-md-6">
                              <select name="level" class="form-control">
								<option value='User' selected='selected'> User </option>
								<option value='Admin'> Admin </option>
							</select>
							</div>
                      </div>
					  <div class="form-group ">
                          <label class="col-md-4 control-label">Foto</label>
                          <div class="col-md-6 ">
                              <input type=file  name="foto">
                          </div>
                      </div>
					  
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary" id="button-reg">
                                  Simpan
                              </button>

                              
                              <a href="{{{ action('usercontroller@index') }}}" title="Cancel">
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
