@extends('halaman.template.master')
@section('content')
<section   class="tesimainal_aera">
                 <div class="container">
                    <div class="row">
                        <h1 class="news_title">Dokumen Domisili<span>  Usaha</span></h1> <!-- section title name -->
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
                      <form id="menutambah" class="form-horizontal" role="form" method="POST" action="{{ url('/dsusaha') }}">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   
					  <div class="form-group {{ $errors->has('nik') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">NIK</label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="nik" value="{{Request::old('nik')}}" >
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
					  
					  <div class="form-group {{ $errors->has('nama_usaha') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Nama Usaha</label>
                          <div class="col-md-6 ">
                              <input type="text" class="form-control" name="nama_usaha" value="{{Request::old('nama_usaha')}}" placeholder="nama perusahaan Anda">
							   <span class="text-danger">{{ $errors->first('nama_usaha') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('penanggung_jawab') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Penanggung Jawab</label>
                          <div class="col-md-6 ">
                              <input type="text" class="form-control" name="penanggung_jawab" value="{{Request::old('penanggung_jawab')}}" placeholder="penanggung jawab">
							   <span class="text-danger">{{ $errors->first('penanggung_jawab') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('jenis_kegiatan') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">jenis_kegiatan</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="jenis_kegiatan" value="{{Request::old('jenis_kegiatan')}}" placeholder="Klasifikasi / Jenis Usaha Anda">
							   <span class="text-danger">{{ $errors->first('jenis_kegiatan') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('luas') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Luas Keseluruhan</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="luas" value="{{Request::old('luas')}}" placeholder="luas keseluruhan usaha anda">
							   <span class="text-danger">{{ $errors->first('luas') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('luas_ruang') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Luas Ruang Usaha</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="luas_ruang" value="{{Request::old('luas_ruang')}}" placeholder="luas usaha anda">
							   <span class="text-danger">{{ $errors->first('luas_ruang') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('karyawan') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">jumlah Karyawan</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="karyawan" value="{{Request::old('karyawan')}}" placeholder="jumlah karyawan">
							   <span class="text-danger">{{ $errors->first('karyawan') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('status_bangunan') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Status Bangunan</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="status_bangunan" value="{{Request::old('status_bangunan')}}" placeholder="status bangunan usaha">
							   <span class="text-danger">{{ $errors->first('status_bangunan') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('alamat_usaha') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Alamat Usaha</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="alamat_usaha" value="{{Request::old('alamat_usaha')}}" placeholder="alamat usaha anda">
							   <span class="text-danger">{{ $errors->first('alamat_usaha') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('no_ijin') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">No ijin</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="no_ijin" value="{{Request::old('luas')}}" placeholder="no ijin mendirikan bangunan">
							   <span class="text-danger">{{ $errors->first('no_ijin') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('tanggal_ijin') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Tanggal ijin</label>
                          <div class="col-md-6 ">
                              <input type="type" class="tanggal form-control" name="tanggal_ijin" value="<?php echo date('Y-m-d',time()); ?>">
							   <span class="text-danger">{{ $errors->first('tanggal_ijin') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('notaris') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Notaris</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="notaris" value="{{Request::old('notaris')}}" placeholder="notaris">
							   <span class="text-danger">{{ $errors->first('notaris') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('no_notaris') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">No Notaris</label>
                          <div class="col-md-6 ">
                              <input type="type" class="form-control" name="no_notaris" value="{{Request::old('no_notaris')}}" placeholder="nomor notaris">
							   <span class="text-danger">{{ $errors->first('no_notaris') }}</span>
                          </div>
                      </div>
					  
					  <div class="form-group {{ $errors->has('tanggal_notaris') ? 'has-error' : '' }}">
                          <label class="col-md-4 control-label">Tanggal notaris</label>
                          <div class="col-md-6 ">
                              <input type="type" class="tanggal form-control" name="tanggal_notaris" value="<?php echo date('Y-m-d',time()); ?>">
							   <span class="text-danger">{{ $errors->first('tanggal_notaris') }}</span>
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

