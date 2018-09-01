@extends('halaman.template.master')
@section('content')
<section id="about" class="about_area">
                <div class="container">
                    <div class="row">
					@foreach ($desa as $desa)
                        <h1 class="news_title">LEARN MORE<span> ABOUT US</span></h1>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 first">
                            <div class="about_widget text-right  wow fadeInDown">
                                <div class="widget-title">
                                    <h3>{{ $desa->nama_desa }}<span>  Karawang</span></h3>
                                </div><!-- end servicetitle -->
                                <p>{{ $desa->alamat}}</p>
								<p>{{ $desa->no_telp}}</p>
								<p>{{ $desa->kode_pos}}</p>
                                <div class="social clearfix">
                                    <span data-effect="helix"><a  href="#"><i class="fa fa-twitter"></i></a></span>
                                    <span data-effect="helix"><a  href="#"><i class="fa fa-facebook"></i></a></span>
                                    <span data-effect="helix"><a  href="#"><i class="fa fa-google-plus"></i></a></span>
                                    <span data-effect="helix"><a  href="#"><i class="fa fa-linkedin"></i></a></span>
                                </div><!-- end social -->
                                <a href="#" class="btn btn-primary">Learn more</a>
                            </div><!-- end about widget -->
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last">
                            <div class="about-widget text-left">
                                <div class="widget-title">
                                    <h3>Images</h3>
                                </div><!-- end servicetitle -->
                                <div class="about_skills  wow fadeInDown">
                                    <img class="img-responsive" src="{{ URL::asset('images/'.$desa->icon ) }}" height="300" width="100" alt="gambar">
                                </div><!-- about_skills -->
                            </div><!-- end about widget -->
                        </div><!-- end col-lg-6 -->
						@endforeach
                    </div>
                </div>
            </section><!-- general_wrapper -->
			@endsection
