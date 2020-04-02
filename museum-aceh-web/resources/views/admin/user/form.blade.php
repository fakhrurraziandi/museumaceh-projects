@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">{{ isset($user) ? 'Edit User' : 'Create User' }}</div>
                    <div class="card-body">

                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}

                        @if(isset($user))
                            <form action="{{ route('admin.user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
                        @endif

                            @csrf

                            @isset($user)
                                @method('PUT')
                            @endisset

                            <div class="form-group row" style="display: none;">
                                <label for="role" class="col-sm-3 col-form-label text-sm-right">Role</label>
                                <div class="col-sm-6">
                                    <select class="form-control {{$errors->has('role') ? 'is-invalid' : ''}}" id="role" name="role" placeholder="Role">

                                        @foreach(config('app.roles') as $role)
                                            <option {{old('role', (isset($user) ? $user->role : null)) == $role ? 'selected=""' : '' }} value="{{$role}}">{{ucwords(str_replace('_', ' ', $role))}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('role'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('role')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label text-sm-right">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name" placeholder="Name" value="{{old('name', (isset($user) ? $user->name : null)) }}">
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('name')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label text-sm-right">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="email" name="email" placeholder="Email" value="{{old('email', (isset($user) ? $user->email : null)) }}">
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('email')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label text-sm-right">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="password" name="password" placeholder="Password" value="">
                                    @isset($user)
                                        <span class="text-muted d-inline-block mt-3">Abaikan Password jika anda tidak ingin mengganti password user.</span>
                                    @endisset
                                    @if($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('password')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password_confirmation" class="col-sm-3 col-form-label text-sm-right">Password Confirmation</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" value="">
                                    @if($errors->has('password_confirmation'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('password_confirmation')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-10 offset-sm-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('admin.user.index')}}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        
        $('#description').ckeditor();
    </script>
    
    <script>
        $(function(){
            function onNameInputHandler(){
                const name = $('#name').val();
                $('#slug').val(slugify(name.toLowerCase()));
            }
            $('#name').on('input', onNameInputHandler);
        });
    </script>
@endsection