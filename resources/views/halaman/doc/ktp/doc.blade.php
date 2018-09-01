@extends('halaman.template.master')
@section('content')
<section   class="tesimainal_aera">
                 <div class="container">
                    <div class="row">
                        <h1 class="news_title">Dokumen <span>  KTP</span></h1> <!-- section title name -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
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
               <div class="box box-primary ">
                      <form id="menutambah" class="form-horizontal" role="form" method="POST" action="{{ url('/ktp') }}">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group {{ $errors->has('nik') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label ">NIK</label>
                          <div class="col-md-6 ">
                              <input type="text" class="form-control" name="nik" value="{{Request::old('nik')}}" placeholder="NIK">
							  <span class="text-danger">{{ $errors->first('nik') }}</span>
                          </div> 
                      </div>
   
                      <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Nama Anda</label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="nama" value="{{Request::old('nama')}}" placeholder="Nama">
							   <span class="text-danger">{{ $errors->first('nama') }}</span>
                          </div>
                      </div>
   
                      <div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Tempat Lahir</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="tempat_lahir" value="{{Request::old('tempat_lahir')}}" placeholder="Tempat Lahir">
							   <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Tanggal Lahir</label>
                          <div class="col-md-6 ">
                              <input type="text" class="tanggal form-control " name='tanggal_lahir' value="<?php echo date('Y-m-d',time()); ?>">
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
                          <div class="col-md-6">
                              <select name="status" class="form-control">
								<option value='Menikah' selected="selected">Menikah </option>
								<option value='Belum Menikah'> Belum Menikah </option>
							</select>
							 <span class="text-danger">{{ $errors->first('status') }}</span>
							</div>
                      </div>
   
                      <div class="form-group {{ $errors->has('pekerjaan') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Pekerjaan</label>
                          <div class="col-md-6 ">
                              <input type="text" class="form-control" name="pekerjaan" value="{{Request::old('pekerjaan')}}" placeholder="pekerjaan">
							   <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Alamat Anda</label>
                          <div class="col-md-6 ">
                              <input type="text" class="form-control" name="alamat" value="{{Request::old('alamat')}}" placeholder="Alamat Sesuai KTP">
							   <span class="text-danger">{{ $errors->first('alamat') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('kewarganegaraan') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Kewarganegaraan</label>
                          <div class="col-md-6 ">
                              <input type="text" class="form-control" name="kewarganegaraan" value="Indonesia">
							   <span class="text-danger">{{ $errors->first('kewarganegaraan') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('no_kk') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">No KK (Kartu Keluarga)</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="no_kk" value="{{Request::old('no_kk')}}" placeholder="Isi sesuai KK anda">
							   <span class="text-danger">{{ $errors->first('no_kk') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('ayah') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Nama Ayah</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="ayah" value="{{Request::old('ayah')}}" placeholder="Ayah">
							   <span class="text-danger">{{ $errors->first('ayah') }}</span>
                          </div>
                      </div>
					  <div class="form-group {{ $errors->has('ibu') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Nama Ibu</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="ibu" value="{{Request::old('ibu')}}" placeholder="Ibu">
							   <span class="text-danger">{{ $errors->first('ibu') }}</span>
                          </div>
                      </div>
   
                      <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Email</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="email" value="{{Request::old('email')}}" placeholder="@email">
							   <span class="text-danger">{{ $errors->first('email') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('no_telp') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">No Telp</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="no_telp" value="{{Request::old('no_telp')}}" placeholder="No Telp">
							   <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                          </div>
                      </div>
					   <div class="form-group">
                          <label class="col-md-4 control-label">Foto</label>
                          <div class="col-md-6 ">
                              <input type=file name="foto">
                          </div>
                      </div>
   
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary" id="button-reg">
                                  Simpan
                              </button>

                              
                              <a href="{{{ action('pagecontroller@home') }}}" title="Cancel">
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
		  </div>
          </div>
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
</section>
		@endsection

