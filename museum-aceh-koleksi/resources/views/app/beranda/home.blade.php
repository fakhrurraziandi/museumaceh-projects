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
<body class="bg-dark text-white">


    <div class="container py-5">
        <div class="row justify-content-center mb-3">
            <div class="col-sm-4">
                <img src="{{asset('img/landing-logo.png')}}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-6 text-center">
                <h1>DATABASE KOLEKSI <br>MUSEUM ACEH</h1>

                <div class="aceh-stripe my-3"></div>

                <p class="mb-3">Selamat datang di Database Koleksi Museum Aceh. Database ini berisikan informasi koleksi yang telah melalui proses digitalisasi dan terbuka untuk publik. Tujuan dari penyediaan layanan ini adalah untuk memberi akses yang lebih mudah bagi publik dalam kegiatan penelitian, pendidikan dan penambahan wawasan sejarah Aceh.</p>

                <p><a href="{{route('app.beranda.index')}}" class="btn btn-secondary"><i class="fa fa-search"></i> LIHAT KOLEKSI</a></p>

                <p class="my-3">
                    <a href="" class="btn btn-outline-secondary"><i class="fa fa-facebook"></i></a> 
                    <a href="" class="btn btn-outline-secondary"><i class="fa fa-instagram"></i></a> 
                    <a href="" class="btn btn-outline-secondary"><i class="fa fa-twitter"></i></a> 
                    <a href="" class="btn btn-outline-secondary"><i class="fa fa-youtube"></i></a> 
                </p>

                <p>
                    <img src="{{asset('img/pancacita-color-sm.png')}}" style="width: 50px;" alt="" />
                </p>

                <h6>DINAS KEBUDAYAAN DAN PARIWISATA ACEH</h6>
                <p><small>COPYRIGHT 2019</small></p>


            </div>
        </div>
    </div>
    
    

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
