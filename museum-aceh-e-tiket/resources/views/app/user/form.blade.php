@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">{{ isset($user) ? 'Ubah Pengguna' : 'Tambah Pengguna' }}</div>
                    <div class="card-body">
                        
                        
                        @if(isset($user))
                            <form action="{{ route('app.user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('app.user.store')}}" method="POST" enctype="multipart/form-data">
                        @endif

                            @csrf

                            @isset($user)
                                @method('PUT')
                            @endisset

                            <div class="form-group row">
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
                                <label for="username" class="col-sm-3 col-form-label text-sm-right">Username</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}" id="username" name="username" placeholder="Username" value="{{old('username', (isset($user) ? $user->username : null)) }}">
                                    @if($errors->has('username'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('username')}}
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
                                    <a href="{{route('app.user.index')}}" class="btn btn-secondary">Cancel</a>
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
    <script>
        $(function(){

            $('#table-data').bootstrapTable({
                toolbar: "#table-data-toolbar",
                classes: 'table table-striped table-no-bordered',
                search: true,
                showRefresh: true,
                iconsPrefix: 'fa',
                // showToggle: true,
                // showColumns: true,
                // showExport: true,
                // showPaginationSwitch: true,
                pagination: true,
                pageList: [10, 25, 50, 100, 'ALL'],
                // showFooter: false,
                sidePagination: 'server',
                url: '{{route('app.user.data')}}',
                columns: [
                    {
                        field: 'id',
                        title: 'Action',
                        class: 'text-nowrap',
                        formatter: function(value, row, index){
                           
                            return `
                                <a class="btn btn-sm btn-info" href="${base_url + '/app/user/' + value + '/edit'}"><i class="fa fa-edit"></i> Edit</a>
                                <form method="POST" action="${base_url + '/app/user/' + value}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete data ${row.name}?')">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            `;
                        }
                    },
                    {
                        field: 'nama',
                        title: 'Nama',
                    },
                    {
                        field: 'tarif_individu',
                        title: 'Tarif Individu',
                        formatter: function(value){
                            return 'Rp. ' + number_format(value, 0, ',', '.');
                        }
                    },
                    {
                        field: 'tarif_rombongan',
                        title: 'Tarif Rombongan',
                        formatter: function(value){
                            return 'Rp. ' + number_format(value, 0, ',', '.');
                        }
                    },
                    {
                        field: 'created_at',
                        title: 'Created at',
                    },
                    {
                        field: 'updated_at',
                        title: 'Updated at',
                    },
                ]
            });

        });
    </script>
@endsection