@extends('halaman.template.master')
@section('content')
<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--======================
                PRE LOADER
        =======================-->
        <section id="loading-image"></section>
        <!--End Pre loder -->
 <section id="features"  class="slider_aera">
                <div id="boxgallery" class="boxgallery" data-effect="effect-1">
    				<div class="panel"><img src="{{ URL::asset('images/bg.jpg') }}" alt="Gambar 1"/></div>
					<div class="panel"><img src="{{ URL::asset('images/gedung.jpg') }}" alt="Gambar 1"/></div>
					<div class="panel"><img src="{{ URL::asset('images/gambar.jpg') }}" alt="Gambar 1"/></div>
					<div class="panel"><img src="{{ URL::asset('images/location-06.jpg') }}" alt="Gambar 1"/></div>
    				
    			</div>
    			<div class="codrops-header content">
                    <h1 class="content__heading">
			<SCRIPT language=JavaScript>var d = new Date();
						   var h = d.getHours();
						   if (h < 11) { document.write('SELAMAT PAGI'); }
						   else { if (h < 15) { document.write('SELAMAT SIANG'); }
						   else { if (h < 19) { document.write('SELAMAT SORE'); }
						   else { if (h <= 23) { document.write('SELAMAT MALAM'); }
						   }}}
			</SCRIPT>
			   </h1>
                    <p class="content__teaser">Selamat Datang Di E-goverment Desa SukaLuyu </p>
					<p class="content__teaser"><img src="{{ URL::asset('images/unnamed.png') }}" height="150" width="90" alt="Gambar 1"/></p>
                    <a href="#" class="content__cta"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="content__cta"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="content__cta"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="content__cta"><i class="fa fa-dribbble"></i></a>
                    <a href="#" class="content__cta"><i class="fa fa-skype"></i></a>
                    <a href="#" class="content__cta"><i class="fa fa-linkedin"></i></a>
                </div><!-- /content -->
            </section>
            <!-- End Slider Section -->
			@include('halaman.include.doc')
		 <section id="blog" class="news_aera">
                 <div class="container">
                    <div class="row">
                        <h1 class="news_title">Berita <span>Terbaru</span></h1>
						@foreach ($data as $info)
                        <div class="col-lg-3 col-md-3 col-sm-3 news_box wow fadeInDown">
                            <div class="news_title_box">
                                <i class="fa fa-calendar"></i>
                                <h2>{{ $info->tanggal }}</h2>
                            </div>
							<a href="{{{ URL::to('home/'.$info->id.'/detail') }}}">
                            <img src="{{ URL::asset('images/'.$info->foto ) }}" width="270" height="180" alt=""></a>
                            <h3>{{ $info->tentang }}</h3>
                        </div>
                  @endforeach
                    </div>
					<div class="pagination" >
                        {{ $data->links() }}            
                                </div>
                </div>
                </div>
            </section>
			@include('halaman.include.contact')
			
@endsection