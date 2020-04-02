<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
</head>
<body>
    <div id="app">

        <div class="aceh-stripe"></div>

        <header class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img src="{{asset('img/logo.PNG')}}" style="width: 200px;" alt="">
                    </div>
                </div>
            </div>
        </header>


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{route('page.home')}}">Beranda</a></li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('page.page', 'sejarah-museum-aceh')}}">Sejarah</a>
                            <a class="dropdown-item" href="{{route('page.page', 'koleksi-museum-aceh')}}">Koleksi</a>
                            <a class="dropdown-item" href="{{route('page.page', 'struktur-organisasi')}}">Struktur Organisasi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kunjungan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('page.page', 'waktu-kunjungan')}}">Waktu Kunjungan</a>
                            <a class="dropdown-item" href="{{route('page.page', 'tiket')}}">Tiket</a>
                            <a class="dropdown-item" href="{{route('page.page', 'peraturan-dan-fasilitas')}}">Peraturan dan Fasilitas</a>
                            <a class="dropdown-item" href="{{route('page.page', 'denah-museum')}}">Denah Museum</a>
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('page.posts')}}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('page.events')}}">Event Pameran</a></li>

                    
                    <li class="nav-item"><a class="nav-link" href="{{route('page.page', 'penelitian')}}">Penelitian</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('page.page', 'kerja-sama')}}">Kerja Sama</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('page.page', 'dukungan')}}">Dukungan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('page.contact')}}">Kontak</a></li>
                </ul>
            </div>
        </nav>

        <main class="py-4 content">
            @yield('content')
        </main>

        <hr>

        <footer class="py-4">
            
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">

                        <p class="my-3">
                            <a href="" class="btn btn-outline-secondary"><i class="fa fa-facebook"></i></a> 
                            <a href="" class="btn btn-outline-secondary"><i class="fa fa-instagram"></i></a> 
                            <a href="" class="btn btn-outline-secondary"><i class="fa fa-twitter"></i></a> 
                            <a href="" class="btn btn-outline-secondary"><i class="fa fa-youtube"></i></a> 
                        </p>
                        <p>
                            Jl. Sultan Mahmudsyah No.10, Peuniti, Kec. Baiturrahman <br>
                            Banda Aceh, Aceh 23116 <br>
                            Telp: (0651) 22222 <br>
                            Fax: (0651) 23424
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-sm-12">

                                <div class="d-flex justify-content-center align-items-center">
                                    <div style="margin-left: 4%; margin-right: 4%; width: 25.33%;"><a href="https://acehprov.go.id/"><img style="padding: 0 20px;" class="img-fluid" src="{{asset('img/pancacita.png')}}"  alt=""></a> </div>
                                    <div style="margin-left: 4%; margin-right: 4%; width: 25.33%;"><a href="http://disbudpar.acehprov.go.id/"><img class="img-fluid" src="{{asset('img/the-light-of-aceh.png')}}"  alt=""></a></div>
                                    <div style="margin-left: 4%; margin-right: 4%; width: 25.33%;"><a href="https://www.kemdikbud.go.id/main/"><img class="img-fluid" src="{{asset('img/logo-kemendikbud.PNG')}}"  alt=""></a></div>
                                </div>
                                
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>    
            </div>
        </footer>
    </div>

    @yield('scripts')
</body>
</html>
