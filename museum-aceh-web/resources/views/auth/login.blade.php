@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="bg-dark" style="position: relative; border: 20px solid #343a40;">

                <div class="aceh-stripe" style="position: absolute; top: 0; left: 0; right: 0;"></div>
                <div class="aceh-stripe-v" style="position: absolute; top: 0; bottom: 0; left: 0;"></div>
                <div class="aceh-stripe" style="position: absolute; bottom: 0; left: 0; right: 0;"></div>
                <div class="aceh-stripe-v" style="position: absolute; top: 0; bottom: 0; right: 0;"></div>

                <div class="login-form-wrapper py-4 px-5 text-white">

                    <p class="text-center mb-4"><img style="width: 60%;" src="{{asset('img/logo.png')}}" alt=""></p>

                    <h5 class="text-center mb-3">PENGELOLA WEBSITE MUSEUM ACEH</h5>
                    <form method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="form-group">
                            {{-- <label for="email">Email address</label> --}}
                            <input type="email" class="form-control @error('email') is-invalid @enderror border-0" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            @error('email')
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
