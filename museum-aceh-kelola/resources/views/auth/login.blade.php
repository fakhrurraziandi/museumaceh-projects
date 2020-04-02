@extends('layouts.auth')

@section('content')
    <div class="container" style="padding-top: 120px;">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card bg-dark text-white">
                    <div class="card-body pb-3" style="padding-left: 70px; padding-right: 70px; position: relative;">

                        <img src="{{asset('design/dist/img/login-decor.png')}}" style="position: absolute; height: 150px; top: -120px; left: 0;" alt="">
                        <img src="{{asset('design/dist/img/login-decor.png')}}" style="position: absolute; height: 150px; top: -120px; right: 0; transform: scaleX(-1);" alt="">

                        <img src="{{asset('design/dist/img/landing-logo.png')}}" class="img-fluid px-5" alt="">

                        <div class="aceh-stripe my-4"></div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <!-- <label for="email">Email address</label> -->
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" aria-describedby="usernameHelp" placeholder="Username">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <!-- <label for="password">Password</label> -->
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                            
                            <button class="btn btn-secondary btn-block">LOGIN</button>
                            {{-- <a href="./home.html" class="btn btn-secondary btn-block">LOGIN</a> --}}

                            <p class="text-center pt-3 pb-2"><img style="width: 50px;" src="{{asset('design/dist/img/pancacita-color-sm.png')}}" alt=""></p>

                            <h6 class="text-center">DINAS KEBUDAYAAN DAN PARIWISATA ACEH</h6>
                            <p class="text-center"><small>COPYRIGHT 2019</small></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
