<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

	<link href="{{URL::asset('admin/bootstrap/css/font-awesome.min.css')}}"  rel="stylesheet"  type="text/css" >
    <link rel="stylesheet" href="{{URL::asset('admin/css/style.css')}}" type="text/css" media="all" />
	<script src="{{URL::asset('admin/js/jquery.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('admin/js/javascript.js')}}" type="text/javascript"></script>
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
	<script language="javascript">
function validasi(form){
  if (form.username.value == ""){
    alert("username belum diisi");
    form.username.focus();
    return (false);
  }
     
  if (form.password.value == ""){
    alert("password masih kosong");
    form.password.focus();
    return (false);
  }
  return (true);
}
</script>
	<meta name="base_url" content="{{ URL::to('/') }}">
</head>
<body OnLoad="document.login.username.focus();">
<!--
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
    
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                
                <ul class="nav navbar-nav navbar-right">
                    
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>-->
    @yield('content')

    <script src="{{ URL::asset('admin/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>    
    <script src="{{ URL::asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
