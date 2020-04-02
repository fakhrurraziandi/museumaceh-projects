@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">{{ isset($pegawai_pns) ? 'Ubah Pegawai PNS' : 'Tambah Pegawai PNS' }}</div>
                    <div class="card-body">
                        
                        
                        @if(isset($pegawai_pns))
                            <form action="{{ route('app.pegawai_pns.update', $pegawai_pns->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('app.pegawai_pns.store')}}" method="POST" enctype="multipart/form-data">
                        @endif

                            @csrf

                            @isset($pegawai_pns)
                                @method('PUT')
                            @endisset

                            
                           
                            <div class="form-group row"> <label for="nama" class="col-sm-2 col-form-label text-sm-right">nama</label> <div class="col-sm-10"> <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama" placeholder="nama" value="{{old('nama', (isset($pegawai_pns->nama) ? $pegawai_pns->nama : null)) }}"> @if($errors->has('nama')) <div class="invalid-feedback"> {{$errors->first('nama')}} </div> @endif </div> </div>
                            <div class="form-group row"> <label for="nip" class="col-sm-2 col-form-label text-sm-right">nip</label> <div class="col-sm-10"> <input type="text" maxlength="18" class="form-control {{$errors->has('nip') ? 'is-invalid' : ''}}" id="nip" name="nip" placeholder="nip" value="{{old('nip', (isset($pegawai_pns->nip) ? $pegawai_pns->nip : null)) }}"> @if($errors->has('nip')) <div class="invalid-feedback"> {{$errors->first('nip')}} </div> @endif </div> </div>
                            <div class="form-group row"> <label for="golongan" class="col-sm-2 col-form-label text-sm-right">golongan</label> <div class="col-sm-10"> <input type="text" class="form-control {{$errors->has('golongan') ? 'is-invalid' : ''}}" id="golongan" name="golongan" placeholder="golongan" value="{{old('golongan', (isset($pegawai_pns->golongan) ? $pegawai_pns->golongan : null)) }}"> @if($errors->has('golongan')) <div class="invalid-feedback"> {{$errors->first('golongan')}} </div> @endif </div> </div>
                            <div class="form-group row"> <label for="tmt_terakhir" class="col-sm-2 col-form-label text-sm-right">tmt_terakhir</label> <div class="col-sm-10"> <input type="date" class="form-control {{$errors->has('tmt_terakhir') ? 'is-invalid' : ''}}" id="tmt_terakhir" name="tmt_terakhir" placeholder="tmt_terakhir" value="{{old('tmt_terakhir', (isset($pegawai_pns->tmt_terakhir) ? $pegawai_pns->tmt_terakhir : null)) }}"> @if($errors->has('tmt_terakhir')) <div class="invalid-feedback"> {{$errors->first('tmt_terakhir')}} </div> @endif </div> </div>
                            <div class="form-group row"> <label for="pendidikan" class="col-sm-2 col-form-label text-sm-right">pendidikan</label> <div class="col-sm-10"> <input type="text" class="form-control {{$errors->has('pendidikan') ? 'is-invalid' : ''}}" id="pendidikan" name="pendidikan" placeholder="pendidikan" value="{{old('pendidikan', (isset($pegawai_pns->pendidikan) ? $pegawai_pns->pendidikan : null)) }}"> @if($errors->has('pendidikan')) <div class="invalid-feedback"> {{$errors->first('pendidikan')}} </div> @endif </div> </div>
                            <div class="form-group row"> <label for="nomor_handphone" class="col-sm-2 col-form-label text-sm-right">nomor_handphone</label> <div class="col-sm-10"> <input type="text" class="form-control {{$errors->has('nomor_handphone') ? 'is-invalid' : ''}}" id="nomor_handphone" name="nomor_handphone" placeholder="nomor_handphone" value="{{old('nomor_handphone', (isset($pegawai_pns->nomor_handphone) ? $pegawai_pns->nomor_handphone : null)) }}"> @if($errors->has('nomor_handphone')) <div class="invalid-feedback"> {{$errors->first('nomor_handphone')}} </div> @endif </div> </div>
                            

                            <div class="row mt-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('app.pegawai_pns.index')}}" class="btn btn-secondary">Cancel</a>
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
                url: '{{route('app.pegawai_pns.data')}}',
                columns: [
                    {
                        field: 'id',
                        title: 'Action',
                        class: 'text-nowrap',
                        formatter: function(value, row, index){
                           
                            return `
                                <a class="btn btn-sm btn-info" href="${base_url + '/app/pegawai_pns/' + value + '/edit'}"><i class="fa fa-edit"></i> Edit</a>
                                <form method="POST" action="${base_url + '/app/pegawai_pns/' + value}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete data ${row.name}?')">
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