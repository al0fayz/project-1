@extends('halaman.template.master')
@section('content')
 <section id="service" class="mobile_aera">
				@foreach ($info as $item)
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="tab_title">BERITA <span>TERBARU</span></h2>
                        </div>
                        <div class="offer-service wow fadeInDown">
                            <div class="col-lg-12">
                                <ul class="nav nav-tabs">
						
                                </ul>
                            </div>
                            <div class="col-lg-12 tab-content">
                                <div class="tab-pane  fade in active" id={{ $item->tentang }}>
                                    <div class="col-lg-7  mobile_box">
                                        <div class="post_box">
                                            <div class="caption about_caption left">
                                                <h3><i class="fa fa-laptop"></i> &nbsp; {{ $item->tentang }}</h3>
												 <p>{{ $item->tanggal }}</P>
												 <p>{{ $item->isi }}</P>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 img_box">
									<img class="img-responsive" src="{{ URL::asset('images/'.$item->foto ) }}" alt="gambar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				 @endforeach
            </section>
@endsection