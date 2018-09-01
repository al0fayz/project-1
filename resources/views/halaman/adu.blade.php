@extends('halaman.template.master')
@section('content')
<section   class="tesimainal_aera">
                 <div class="container">
                    <div class="row">
                        <h1 class="news_title">Suara <span> Rakyat</span></h1> <!-- section title name -->
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
                <div class="box box-primary">
                  <div class="">
                      <form id="" class="form-horizontal" role="form" method="POST" action="{{ url('/adu') }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
					  
					  <div class="form-group {{ $errors->has('nik') ? 'has-error' : '' }}">
                          <label class="col-md-2 control-label">NIK</label>
                          <div class="col-md-9 ">
                              <input type="text" class="form-control" name="nik" >
							  <span class="text-danger">{{ $errors->first('nik') }}</span>
                          </div>
                      </div>
					
                      <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : '' }}">
                          <label class="col-md-2 control-label">Tanggal</label>
                          <div class="col-md-9">
                              <input type="text" class="form-control tanggal" name="tanggal" value="<?php echo date('Y-m-d',time()); ?>" >
							  <span class="text-danger">{{ $errors->first('tanggal') }}</span>
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
                              <button type="submit" class="btn btn-primary" >
                                  Simpan
                              </button>

                              
                              <a href="{{{ URL::to('home') }}}" title="Cancel">
                              <button type="button" class="btn btn-default" id="button-reg">
                                  Cancel
                              </button>
                              </a>
								<br />
								<br />
                          </div>
                      </div>
                      </form>   
                  </div>
                </div>
            </div>
          </div>
                            </div>
                        </div>
                    </div>
</section>
<script type="text/javascript">
            $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>
@endsection
