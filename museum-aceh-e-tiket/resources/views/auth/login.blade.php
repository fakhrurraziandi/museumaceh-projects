@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="bg-dark">

                <header class="bg-primary py-4 mb-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                            
                                <div class="app-logo-auth">
                                    <div class="app-logo-auth__img-wrapper">
                                        <img src="{{asset('img/logo.png')}}" alt="">
                                    </div>
                                    <div class="app-logo-auth__title">
                                        <h1 class="h2 font-weight-bold">E-Ticket</h1>
                                        <h2 class="h5">MUSEUM ACEH</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="login-form-wrapper py-4 px-5 text-white">

                    <div class="aceh-stripe my-5"></div>

                    <h3 class="text-center mb-5">SISTEM PENGELOLAAN TIKET MUSEUM ACEH</h3>
                    <form method="POST" action="{{ route('login') }}">

                        @csrf

                        

                        <div class="form-group">
                            {{-- <label for="username">Username</label> --}}
                            <input type="text" class="form-control @error('username') is-invalid @enderror border-0" id="username" name="username" aria-describedby="usernameHelp" placeholder="Username">
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{-- <label for="password">Password</label> --}}
                            <input type="password" class="form-control @error('password') is-invalid @enderror border-0" id="password" name="password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-secondary btn-block">LOGIN</button>

                        <div class="text-center mt-4">
                            <p class="text-center"><img style="width: 50px;" src="{{asset('img/pancacita-color-sm.png')}}" alt=""></p>
                            <h5>DINAS KEBUDAYAAN DAN PARIWISATA ACEH</h5>
                            <p class="mb-0"><small>Copyright 2019</small></p>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
