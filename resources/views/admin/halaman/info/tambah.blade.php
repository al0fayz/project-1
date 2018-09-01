@extends('admin.layout.master')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Berita</li>
          </ol>
@stop
@section('content')
<div class="row">
            <div class="col-md-12">
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
                    <h3 class="box-title">Tambah Berita </h3>
                  </div><!-- /.box-header -->
                  <div class="">
                      <form id="" class="form-horizontal" role="form" method="POST" action="{{ url('/info') }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
               
                      <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : '' }}">
                          <label class="col-md-2 control-label">Tanggal</label>
                          <div class="col-md-9">
                              <input type="text" class="tanggal form-control " name='tanggal'  value="<?php echo date('Y-m-d',time()); ?>">
							  <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                          </div> 
					  </div>
   
                      <div class="form-group {{ $errors->has('tentang') ? 'has-error' : '' }}">
                          <label class="col-md-2 control-label">Tentang</label>
                          <div class="col-md-9 ">
                              <input type="text" class="form-control" name="tentang" >
							  <span class="text-danger">{{ $errors->first('tentang') }}</span>
                          </div>
                      </div>
   
                      <div class="form-group {{ $errors->has('isi') ? 'has-error' : '' }}">
                          <label class="col-md-2 control-label">Isi Berita</label>
                          <div class="col-md-9 ">
                              <textarea class='ckeditor' class="form-control" name="isi" cols='10' rows='20' ></textarea><br />
							  <span class="text-danger">{{ $errors->first('isi') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group">
                          <label class="col-md-2 control-label">Foto</label>
                          <div class="col-md-9 ">
                              <input type=file  name="foto" >
                          </div>
                      </div>
					  
					  
   
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary" id="button-reg">
                                  Simpan
                              </button>

                              
                              <a href="{{{ action('infocontroller@index') }}}" title="Cancel">
                              <button type="button" class="btn btn-default" id="button-reg">
                                  Cancel
                              </button>
                              </a>
								<br />
								<br />
                          </div>
                      </div>
                      </form>   
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
          </div><!-- /.row (main row) -->
            
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
