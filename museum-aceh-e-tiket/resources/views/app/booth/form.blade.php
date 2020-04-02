@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">{{ isset($booth) ? 'Ubah Booth' : 'Tambah Booth' }}</div>
                    <div class="card-body">
                        
                        
                        @if(isset($booth))
                            <form action="{{ route('app.booth.update', $booth->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('app.booth.store')}}" method="POST" enctype="multipart/form-data">
                        @endif

                            @csrf

                            @isset($booth)
                                @method('PUT')
                            @endisset

                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label text-sm-right">Nama</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama" placeholder="Nama" value="{{old('nama', (isset($booth) ? $booth->nama : null)) }}">
                                    @if($errors->has('nama'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('nama')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="deskripsi" class="col-sm-2 col-form-label text-sm-right">Deskripsi</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control {{$errors->has('deskripsi') ? 'is-invalid' : ''}}" id="deskripsi" name="deskripsi" placeholder="Deskripsi">{{old('deskripsi', (isset($booth) ? $booth->deskripsi : null)) }}</textarea>
                                    @if($errors->has('deskripsi'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('deskripsi')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                           

                            <div class="row mt-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('app.booth.index')}}" class="btn btn-secondary">Cancel</a>
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

            $('#table-data').boothstrapTable({
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
                url: '{{route('app.booth.data')}}',
                columns: [
                    {
                        field: 'id',
                        title: 'Action',
                        class: 'text-nowrap',
                        formatter: function(value, row, index){
                           
                            return `
                                <a class="btn btn-sm btn-info" href="${base_url + '/app/booth/' + value + '/edit'}"><i class="fa fa-edit"></i> Edit</a>
                                <form method="POST" action="${base_url + '/app/booth/' + value}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete data ${row.name}?')">
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