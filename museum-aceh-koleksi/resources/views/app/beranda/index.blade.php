@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                    <div class="row justify-content-center mb-2">

                    
                        <div class="col-sm-2">
                            <a href="{{route('app.collection_geologika.index')}}" class="d-block text-dark card border-dark" style="border-width: 3px">
                                <div class="card-body text-center px-0 pb-0">
                                    <div class="px-5"><img src="{{asset('img/icon-geologika.png')}}" class="img-fluid mb-2" alt=""></div>
                                    <h6 class="bg-dark text-white mb-2 py-2">Geologika</h6>
                                    <h4>48</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="./biologika-list.html" class="d-block text-dark card border-dark" style="border-width: 3px">
                                <div class="card-body text-center px-0 pb-0">
                                    <div class="px-5"><img src="{{asset('img/icon-biologika.png')}}" class="img-fluid mb-2" alt=""></div>
                                    <h6 class="bg-dark text-white mb-2 py-2">Biologika</h6>
                                    <h4>23</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="./etnografika-list.html" class="d-block text-dark card border-dark" style="border-width: 3px">
                                <div class="card-body text-center px-0 pb-0">
                                    <div class="px-5"><img src="{{asset('img/icon-etnografika.png')}}" class="img-fluid mb-2" alt=""></div>
                                    <h6 class="bg-dark text-white mb-2 py-2">Etnografika</h6>
                                    <h4>32</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="./arkeologika-list.html" class="d-block text-dark card border-dark" style="border-width: 3px">
                                <div class="card-body text-center px-0 pb-0">
                                    <div class="px-5"><img src="{{asset('img/icon-arkeologika.png')}}" class="img-fluid mb-2" alt=""></div>
                                    <h6 class="bg-dark text-white mb-2 py-2">Arkeologika</h6>
                                    <h4>456</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="./historika-list.html" class="d-block text-dark card border-dark" style="border-width: 3px">
                                <div class="card-body text-center px-0 pb-0">
                                    <div class="px-5"><img src="{{asset('img/icon-historika.png')}}" class="img-fluid mb-2" alt=""></div>
                                    <h6 class="bg-dark text-white mb-2 py-2">Historika</h6>
                                    <h4>23</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-4">
                        <div class="col-sm-2">
                            <a href="./numismatika-list.html" class="d-block text-dark card border-dark" style="border-width: 3px">
                                <div class="card-body text-center px-0 pb-0">
                                    <div class="px-5"><img src="{{asset('img/icon-numismatika.png')}}" class="img-fluid mb-2" alt=""></div>
                                    <h6 class="bg-dark text-white mb-2 py-2">Numismatika</h6>
                                    <h4>89</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="./filologika-list.html" class="d-block text-dark card border-dark" style="border-width: 3px">
                                <div class="card-body text-center px-0 pb-0">
                                    <div class="px-5"><img src="{{asset('img/icon-filologika.png')}}" class="img-fluid mb-2" alt=""></div>
                                    <h6 class="bg-dark text-white mb-2 py-2">Filologika</h6>
                                    <h4>23</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="./keramonologika-list.html" class="d-block text-dark card border-dark" style="border-width: 3px">
                                <div class="card-body text-center px-0 pb-0">
                                    <div class="px-5"><img src="{{asset('img/icon-keramonologika.png')}}" class="img-fluid mb-2" alt=""></div>
                                    <h6 class="bg-dark text-white mb-2 py-2">Keramonologika</h6>
                                    <h4>27</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="./senirupa-list.html" class="d-block text-dark card border-dark" style="border-width: 3px">
                                <div class="card-body text-center px-0 pb-0">
                                    <div class="px-5"><img src="{{asset('img/icon-senirupa.png')}}" class="img-fluid mb-2" alt=""></div>
                                    <h6 class="bg-dark text-white mb-2 py-2">Seni Rupa</h6>
                                    <h4>77</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="./teknologika-list.html" class="d-block text-dark card border-dark" style="border-width: 3px">
                                <div class="card-body text-center px-0 pb-0">
                                    <div class="px-5"><img src="{{asset('img/icon-teknologika.png')}}" class="img-fluid mb-2" alt=""></div>
                                    <h6 class="bg-dark text-white mb-2 py-2">Teknologika</h6>
                                    <h4>56</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-10 text-center">
                    <p>Jika anda membutuhkan gambar dan informasi yang lebih detail tentang koleksi Museum Aceh, silahkan klik tombol hubungi kami. Kami juga menyediakan portal web dan pemesanan tiket kunjungan yang dapat anda akses dengan cara mengklik link dibawah ini.</p>

                    <p class="mb-5"><a href="#" class="btn btn-warning">Web Museum</a> <a href="#" class="btn btn-warning">Booking tiket</a> </p>

                    <p>
                        <img src="{{asset('img/pancacita-color-sm.png')}}" style="width: 50px;" alt="" />
                    </p>
    
                    <h6>DINAS KEBUDAYAAN DAN PARIWISATA ACEH</h6>
                    <p><small>COPYRIGHT 2019</small></p>
                </div>
            </div>
        </div>
    </div>
@endsection
