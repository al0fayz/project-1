

@extends('auth.layout.app')
@section('content')
<!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
<div id="header">
  <h1>DESA SUKALUYU</h1>
</div>

  <hr id="header_stripe"/>
  <div id="page_container">
  <div id="toppanel">
    <div id="panel">
      <div id="panel_contents"> </div>
      <center><h2>SELAMAT DATANG</h2></center>     
      <div class="loginform" >
	  <form name="login" action="{{URL::to('/login')}}" method="POST" onSubmit="return validasi(this)">
	  {{ csrf_field() }}
	  <table class="loginform">
	<tr><td>
		<img src="{{URL::asset('admin/images/unnamed.png')}}" alt="Company-Logo" align="middle" width="120" height="150">
	</td>
	<td>
		<fieldset><legend>&nbsp;Please Log in&nbsp;</legend>
		<label>User Name : </label>
		<input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" size="20"><br />
		@if ($errors->has('username'))
		<script>alert("username yang anda masukan salah");
		form.username.focus();</script>
		@endif
		<label>Password : </label>
		<input id="password" type="password" class="form-control" name="password" size="20"><br /><br />
        @if ($errors->has('password'))
        <script>alert("password yang anda masukan salah");
		form.password.focus();</script>
		@endif
		<center><input type="submit" name="login" value="Login" ></center>
		</fieldset>
	</td>
	</tr>
	</table>
	   </form>
      </div>
    </div>
    <div class="panel_button" style="display: visible;"><img src="{{URL::asset('admin/images/expand.png')}}"  alt="expand"/> <a href="#">Login Here</a> </div>
    <div class="panel_button" id="hide_button" style="display: none;"><img src="{{URL::asset('admin/images/collapse.png')}}" alt="collapse" /> <a href="#">Hide</a> </div>
  </div>
  <div id="content">
    <p>Klik pada bagian LOGIN HERE untuk membuka panel login. Jika ingin menutup panel login, klik pada bagian HIDE.</p>
    <p>Login Administrator merupakan halaman login admin yang berfungsi untuk melakukan input data. Semua data dikontrol melalui halaman administrator, sehingga mempermudah pekerjaan admin.</p>
  </div>
  <div id="footer">   
    <p><?php echo"Created by <a href='http://www.facebook.com/rofai al fayz'>AHMAD ROPAI </a>"; ?></p>
  </div>
</div>
@endsection
