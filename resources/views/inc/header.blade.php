@include('inc.messages')
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Daftar Buku Pendidikan</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/metisMenu.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/sb-admin-2.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

	<script type="text/javascript" src="{{ url('/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ url('/js/metisMenu.js') }}"></script>
	
	<script type="text/javascript" src="{{ url('/js/sb-admin-2.js') }}"></script>
	
	
</head>
<body>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">Daftar Buku Pendidikan</a>
            </div>
            <!-- /.navbar-header -->
                
             <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-top-links navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

            <div class="navbar-default sidebar" role="navigation">
            @if(!Auth::guest())
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu"> 
                        <li>
                            <a href="#"><i class="fa fa-list-ul"></i> Masukan Buku Baru</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/bukudn/create') }}"> form buku dalam negeri</a>
                                </li>
                                <li>
                                    <a href="{{ url('/bukuln/create') }}"> form buku luar negeri</a>
                                </li>
                            </ul>
                        <li>
                    </ul>
                </div>
                @endif
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-list-ul"></i>  Daftar Buku</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/bukudn') }}"> daftar buku dalam negeri</a>
                                </li>
                                <li>
                                    <a href="{{ url('/bukuln') }}"> daftar buku luar negeri</a>
                                </li>
                            </ul>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
            
        </nav>



        
    </div>
    <!-- /#wrapper -->
</body>
</html>