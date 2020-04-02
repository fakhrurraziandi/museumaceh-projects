<?php 
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistem Informasi Pengelolaan Museum Aceh') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="aceh-stripe"></div><header class="bg-dark text-white py-3">
        <div class="container-fluid">

            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="row align-items-center">
                        <div class="col-sm-2">
                            <img src="{{asset('img/app-logo.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-10">
                            <h1 class="h3 mb-0">SISTEM INFORMASI PENGELOLAAN <br> MUSEUM ACEH</h1>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{route('app.beranda')}}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('app.collection.index')}}">Koleksi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('app.event2.index')}}">Event & Pameran</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rekapitulasi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('app.kunjungan.index')}}">Kunjungan</a>
                        <a class="dropdown-item" href="{{route('app.pendapatan.index')}}">Pendapatan</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('app.website.index')}}">Website</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kepegawaian
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('app.pegawai_pns.index')}}">PNS</a>
                    <a class="dropdown-item" href="{{route('app.pegawai_non_pns.index')}}">Non PNS</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('app.archive.index')}}">Arsip</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('app.user.index')}}">Pengguna</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
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
        </div>
    </nav>

    
    @yield('content')


    <script>
        var base_url = '{{URL::to('/')}}';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('scripts')
</body>
</html>
