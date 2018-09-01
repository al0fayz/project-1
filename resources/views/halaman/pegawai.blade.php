@extends('halaman.template.master')
@section('content')
<section id="team" class="team_aera">
                 <div class="container">
                    <div class="row">
                        <h1 class="team_title"><span>Perangkat</span>  Desa</h1>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner  carousel_caption_box">
                              <div class=" item active ">
							  @foreach ($data as $pegawai)
                                <div class="col-lg-4 col-md-4 col-sm-4  cmment_item  wow fadeInDown">
                                    <div class="team-member-profile">
                                        <img src="{{ URL::asset('images/'.$pegawai->foto ) }}" width="170" height="170" alt="">
                                        <div class="team-social">
                                            <a  href="#"><i class="fa fa-twitter"></i></a>
                                            <a  href="#"><i class="fa fa-facebook"></i></a>
                                            <a  href="#"><i class="fa fa-google-plus"></i></a>
                                            <a  href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="cmment_box">
                                        <h3>{{ $pegawai->nama }}</h3>
                                        <address><b>{{ $pegawai->jabatan }}</b></address>
                                        <p>{{ $pegawai->tempat_lahir }} , {{ $pegawai->tanggal_lahir }}
                                        </p>
                                    </div>
                                </div>
								@endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End  Comments Section -->
			@endsection
 