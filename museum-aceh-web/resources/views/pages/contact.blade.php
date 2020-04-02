@extends('layouts.page')

@section('content')

    

    <div class="container">
        <div class="row py-4 align-items-center">
            <div class="col-sm-12">

                
                
                <h2 class="h5 mb-4" style="text-transform: uppercase;">Kontak</h2>
                <div class="aceh-stripe mb-4" style="width: 50%;"></div>

                <p>Anda dapat menyampaikan pesan yang berisikan saran, dukungan, penelitian dan kerjasama agar kami dapat meningkatkan kualitas layanan dan pengelolaan Museum Aceh.</p>

                @if (session('success'))
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('page.contact_submit') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="category" class="col-md-2 col-form-label">{{ __('Kategori') }}</label>

                        <div class="col-md-6">
                            <select id="category" class="form-control @error('category') is-invalid @enderror" name="category" required >
                                <option></option>

                                <option {{ old('category') == 'berisikan saran' ? 'selected=""' : '' }} value="saran">Saran</option>
                                <option {{ old('category') == 'dukungan' ? 'selected=""' : '' }} value="dukungan">Dukungan</option>
                                <option {{ old('category') == 'penelitian' ? 'selected=""' : '' }} value="penelitian">Penelitian</option>
                                <option {{ old('category') == 'kerjasama' ? 'selected=""' : '' }} value="kerjasama">Kerjasama</option>
                            </select>

                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">{{ __('Nama') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required >

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label">{{ __('E-Mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="message" class="col-md-2 col-form-label">{{ __('Pesan') }}</label>

                        <div class="col-md-10">
                            <textarea id="message" rows="10" class="form-control @error('message') is-invalid @enderror" name="message" required >{{ old('message') }}</textarea>

                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    

                    

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-2">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Kirim') }}
                            </button>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        
    </script>
@endsection