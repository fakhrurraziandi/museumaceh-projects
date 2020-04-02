@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">{{ isset($kategori_pengunjung) ? 'Ubah Kategori Pengunjung' : 'Tambah Kategori Pengunjung' }}</div>
                    <div class="card-body">
                        
                        
                        @if(isset($kategori_pengunjung))
                            <form action="{{ route('app.kategori_pengunjung.update', $kategori_pengunjung->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('app.kategori_pengunjung.store')}}" method="POST" enctype="multipart/form-data">
                        @endif

                            @csrf

                            @isset($kategori_pengunjung)
                                @method('PUT')
                            @endisset

                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label text-sm-right">Nama</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama" placeholder="Nama" value="{{old('nama', (isset($kategori_pengunjung) ? $kategori_pengunjung->nama : null)) }}">
                                    @if($errors->has('nama'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('nama')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tarif_individu" class="col-sm-2 col-form-label text-sm-right">Tarif Individu</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control {{$errors->has('tarif_individu') ? 'is-invalid' : ''}}" id="tarif_individu" name="tarif_individu" placeholder="Tarif Individu" value="{{old('tarif_individu', (isset($kategori_pengunjung) ? $kategori_pengunjung->tarif_individu : null)) }}">
                                    @if($errors->has('tarif_individu'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('tarif_individu')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="enable_rombongan" class="col-sm-2 col-form-label text-sm-right">Enable Rombongan</label>
                                <div class="col-sm-6 pt-2">
                                    
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="enable_rombongan_0" name="enable_rombongan" value="0" class="custom-control-input enable_rombongan" {{old('enable_rombongan', (isset($kategori_pengunjung) ? $kategori_pengunjung->enable_rombongan : null)) == 0 ? 'checked=""' : '' }}>
                                        <label class="custom-control-label" for="enable_rombongan_0">Disable</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="enable_rombongan_1" name="enable_rombongan" value="1" class="custom-control-input enable_rombongan" {{old('enable_rombongan', (isset($kategori_pengunjung) ? $kategori_pengunjung->enable_rombongan : null)) == 1 ? 'checked=""' : '' }}>
                                        <label class="custom-control-label" for="enable_rombongan_1">Enable</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row" id="form-group-tarif-rombongan">
                                <label for="tarif_rombongan" class="col-sm-2 col-form-label text-sm-right">Tarif Rombongan</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control {{$errors->has('tarif_rombongan') ? 'is-invalid' : ''}}" id="tarif_rombongan" name="tarif_rombongan" placeholder="Tarif Individu" value="{{old('tarif_rombongan', (isset($kategori_pengunjung) ? $kategori_pengunjung->tarif_rombongan : null)) }}">
                                    @if($errors->has('tarif_rombongan'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('tarif_rombongan')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('app.kategori_pengunjung.index')}}" class="btn btn-secondary">Cancel</a>
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
                url: '{{route('app.kategori_pengunjung.data')}}',
                columns: [
                    {
                        field: 'id',
                        title: 'Action',
                        class: 'text-nowrap',
                        formatter: function(value, row, index){
                           
                            return `
                                <a class="btn btn-sm btn-info" href="${base_url + '/app/kategori_pengunjung/' + value + '/edit'}"><i class="fa fa-edit"></i> Edit</a>
                                <form method="POST" action="${base_url + '/app/kategori_pengunjung/' + value}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete data ${row.name}?')">
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

            function enableRombonganOnChangeHandler(e){
                console.log('changed');
                var value = $('.enable_rombongan:checked').val();
                console.log(value);
                if(value == 0){
                    $('#form-group-tarif-rombongan').hide();
                }else if(value == 1){
                    $('#form-group-tarif-rombongan').show();
                }
            }
            $('.enable_rombongan').on('change', enableRombonganOnChangeHandler);
            enableRombonganOnChangeHandler();

        });
    </script>
@endsection