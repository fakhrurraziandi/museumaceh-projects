<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


    <header class="bg-dark text-white py-4 mb-1">
        <div class="container-fluid">

            <div class="row mb-2 align-items-center">
                <div class="col-sm-6">
                    <div class="row align-items-center">
                        <div class="col-sm-3">
                            <img src="{{asset('img/landing-logo.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-9">
                            <h1 class="h2 mb-0 text-center text-sm-left text-lg-left">DATABASE KOLEKSI <br> MUSEUM ACEH</h1>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="row">
                        <div class="col-sm-12 text-center text-sm-right text-lg-right">
                            <p class="my-3">
                                <a href="#" class="btn btn-outline-light"><i class="fa fa-facebook"></i></a> 
                                <a href="#" class="btn btn-outline-light"><i class="fa fa-instagram"></i></a> 
                                <a href="#" class="btn btn-outline-light"><i class="fa fa-twitter"></i></a> 
                                <a href="#" class="btn btn-outline-light"><i class="fa fa-youtube"></i></a> 
                                <a href="./hubungi-kami.html" class="btn btn-warning">Hubungi Kami</a>
                            </p>
                        </div>
                    </div>
                    {{-- <form class="form-inline justify-content-between align-items-center mb-3">
                        
                        <label for="search" class="mr-4 mb-0">Pencarian Koleksi</label>
                        <input style="flex: 1;" type="password" class="form-control" id="search" placeholder="Masukkan Judul/Nama Koleksi">
                    
                        <button type="submit" class="btn btn-danger ml-3"><i class="fa fa-search"></i> Cari</button>
                    </form> --}}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">


                                <li class="nav-item"><a class="nav-link" href="{{route('app.beranda.index')}}">Beranda</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('app.collection_'. camelcase_to_underscore('Geologika'). '.index')}}">Geologika</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('app.collection_'. camelcase_to_underscore('Biologika'). '.index')}}">Biologika</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('app.collection_'. camelcase_to_underscore('Etnografika'). '.index')}}">Etnografika</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('app.collection_'. camelcase_to_underscore('Arkeologika'). '.index')}}">Arkeologika</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('app.collection_'. camelcase_to_underscore('Historika'). '.index')}}">Historika</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('app.collection_'. camelcase_to_underscore('Numismatika'). '.index')}}">Numismatika</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('app.collection_'. camelcase_to_underscore('Filologika'). '.index')}}">Filologika</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('app.collection_'. camelcase_to_underscore('Keramonologika'). '.index')}}">Keramonologika</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('app.collection_'. camelcase_to_underscore('SeniRupa'). '.index')}}">Seni Rupa</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('app.collection_'. camelcase_to_underscore('Teknologika'). '.index')}}">Teknologika</a>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    <div class="aceh-stripe mb-5"></div>
    

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
