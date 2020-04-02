@extends('layouts.page')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Set up your HTML -->
                <div class="owl-carousel main-carousel">
                    <div class="main-carousel__item" style="background-image: url('{{asset('img/sample-carousel-bg.jpg')}}')"></div>
                    <div class="main-carousel__item" style="background-image: url('{{asset('img/sample-carousel-bg.jpg')}}')"></div>
                    <div class="main-carousel__item" style="background-image: url('{{asset('img/sample-carousel-bg.jpg')}}')"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row py-4 align-items-center">
            <div class="col-sm-8">
                
                <h2 class="h5 mb-4">MUSEUM ACEH TERBUKA UNTUK SIAPA SAJA YANG PEDULI DAN INGIN MENGENALI SEJARAH ACEH.</h2>
                <div class="aceh-stripe mb-4" style="width: 50%;"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit asperiores nesciunt, sequi accusamus eaque debitis molestias, maxime rem reiciendis laborum fugiat vero. Sunt temporibus pariatur alias aliquam natus expedita quia.</p>
                <p><a href="https://e-tiket.museumaceh.com/booking/create" class="btn btn-primary"><i class="fa fa-ticket"></i> Booking Tiket</a></p>
            

            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">

                        <h3 class="h5">DIBUKA SETIAP HARI</h3>
                        <p class="h6 bg-primary text-white py-2">KECUALI HARI LIBUR NASIONAL</p>
                        <P class="h6 mb-3">JAM BERKUNJUNG</P>

                        <div class="d-flex justify-content-center">

                            <div class="card mx-3" style="flex: 1;">
                                <div class="card-header">PAGI</div>
                                <div class="card-body bg-dark text-white">
                                    <p class="my-0">08.30</p>
                                    <hr class="bg-white">
                                    <p class="my-0">12.00</p>
                                </div>
                            </div>

                            <div class="card mx-3" style="flex: 1;">
                                <div class="card-header">MALAM</div>
                                <div class="card-body bg-dark text-white">
                                    <p class="my-0">08.30</p>
                                    <hr class="bg-white">
                                    <p class="my-0">12.00</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-dark text-white py-5 mb-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <h2 class="h5">BELUM PUNYA WAKTU DATANG KE MUSEUM ACEH ? </h2>
                    <p class="mb-0">Anda tetap bisa mengetahui koleksi Museum Aceh melalui aplikasi yang berisikan database koleksi yang telah melalui proses digitalisasi.</p>
                </div>
                <div class="col-sm-4 text-center">
                    <a href="http://koleksi.museumaceh.com/" class="btn btn-warning"><i class="fa fa-thumbs-up"></i> Koleksi Online Museum Aceh</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card border-0" style="background: #cccccc;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{asset('img/rumoh-aceh.PNG')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-sm-8">
                            
                                <h3 class="h4 d-inline-block">
                                    <span class="d-inline-block">SEJARAH MUSEUM ACEH</span>
                                    <div class="aceh-stripe my-3"></div>
                                </h3>
                                
                                <p>Museum Aceh didirikan pada tanggal 31 Juli 1915 dengan nama Atjeh Museum yang dipimpin oleh F.W.Stammeshous dan diresmikan oleh Gubernur Sipil dan Militer Jenderal Belanda H.N.A. Swart. Pada awal berdirinya bangunan Museum tersebut hanya berupa Rumoh Aceh.</p>

                                <p>Setelah Indonesia merdeka, operasional Museum Aceh secara bergantian dikelola oleh Pemerintah Daerah Tk.II Banda Aceh (1945-1969), Badan Pembina Rumpun Iskandar Muda (Baperis) (1970-1975), Departemen Pendidikan dan Kebudayaan (1976-2002) dan saat ini pengelolaan Museum Aceh menjadi kewenangan Pemerintah Provinsi Aceh. Berdasarkan Surat Keputusan Gubernur Nomor 10 Tahun 2002 tanggal 2 Februari 2002, status Museum Aceh menjadi UPTD Museum Provinsi Aceh dibawah Dinas Kebudayaan dan Pariwisata Aceh.</p>

                                <p>Sampai tahun 2019, Museum  Aceh memiliki 5.328 koleksi benda budaya dari berbagai jenis dan 12.445 buku dari berbagai judul yang berisi aneka macam ilmu pengetahuan.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="aceh-stripe my-3"></div>
                
            </div>
        </div>

        
    </div>


    <section class="py-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <h2 class="h3 text-center">EVENT DAN PAMERAN</h2>
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                @foreach($events as $event)
                    <div class="col-sm-6 mb-3">
                        <div class="card card-body">
                            <div class="media">
                                @if($event->featured_image)
                                    <img style="width: 45%;" class="mr-3" src="{{asset($event->featured_image)}}" />
                                @endif
                                <div class="media-body">
                                    
                                    <h4 class="mt-0"><a href="{{route('page.event', $event->slug)}}">{{$event->title}}</a></h4>
                                    <p><i class="fa fa-calendar"></i> {{$event->created_at->diffForHumans()}}</p>
                                    <p>{{substr(strip_tags($event->body), 0, 150)}} [...]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 text-center">
                    <a href="{{route('page.events')}}" class="btn btn-secondary">Lihat Semua Event</a>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            

            <div class="row mb-3">
                @foreach($posts as $post)
                    <div class="col-sm-12 mb-3">
                        <div class="card card-body border-0">
                            <div class="media">
                                @if($post->featured_image)
                                    <img style="width: 25%;" class="mr-3" src="{{asset($post->featured_image)}}" />
                                @endif
                                <div class="media-body">
                                    
                                    <h4 class="mt-0"><a href="{{route('page.post', $post->slug)}}">{{$post->title}}</a></h4>
                                    <p><i class="fa fa-calendar"></i> {{$post->created_at->diffForHumans()}}</p>
                                    <p>{{substr(strip_tags($post->body), 0, 300)}} [...]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 text-center">
                    <a href="{{route('page.posts')}}" class="btn btn-secondary">Indeks Berita</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(function(){
            $(".main-carousel").owlCarousel({
                loop:true,
                margin:10,
                nav: true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
        });
    </script>
@endsection