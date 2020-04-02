@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">{{ isset($kunjungan) ? 'Ubah Kunjungan' : 'Tambah Kunjungan' }}</div>
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

                        <form action="{{route('app.kunjungan.submit_kode_booking')}}" method="POST">
                            
                            @csrf

                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group row">
                                        <label for="kode_booking" class="col-sm-3 col-form-label text-sm-right">Kode Booking</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control {{$errors->has('kode_booking') ? 'is-invalid' : ''}}" id="kode_booking" name="kode_booking" placeholder="Kode Booking" value="{{old('kode_booking', (isset($kunjungan) ? $kunjungan->kode_booking : null)) }}">
                                            @if($errors->has('kode_booking'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('kode_booking')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-sm-10 offset-sm-3">
                                            <button type="submit" class="btn btn-primary">Submit Kode Booking</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="row">
                                <div class="col-sm-7">
                                    <hr>
                                </div>
                            </div>
                        </form>

                        
                        
                        @if(isset($kunjungan))
                            <form action="{{ route('app.kunjungan.update', $kunjungan->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('app.kunjungan.store')}}" method="POST" enctype="multipart/form-data">
                        @endif

                            @csrf

                            @isset($kunjungan)
                                @method('PUT')
                            @endisset

                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group row">
                                        <label for="kategori_pengunjung_id" class="col-sm-3 col-form-label text-sm-right">Kategori</label>
                                        <div class="col-sm-9">
                                            <select class="form-control {{$errors->has('kategori_pengunjung_id') ? 'is-invalid' : ''}}" id="kategori_pengunjung_id" name="kategori_pengunjung_id">
                                                <option value=""></option>
                                                @foreach($list_kategori_pengunjung as $kategori_pengunjung)
                                                    <option 
                                                        data-enable_rombongan="{{$kategori_pengunjung->enable_rombongan}}" 
                                                        data-tarif_individu="{{$kategori_pengunjung->tarif_individu}}" 
                                                        data-tarif_rombongan="{{$kategori_pengunjung->tarif_rombongan}}" 
                                                        {{old('kategori_pengunjung_id', (isset($kunjungan) ? $kunjungan->kategori_pengunjung_id : null)) == $kategori_pengunjung->id ? 'selected=""' : '' }} 
                                                        value="{{$kategori_pengunjung->id}}">
                                                            {{$kategori_pengunjung->nama}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('kategori_pengunjung_id'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('kategori_pengunjung_id')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row" id="row-check-rombongan" style="display: none;">
                                        <div class="col-md-7 offset-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rombongan" id="rombongan" value="1" {{ old('rombongan') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="rombongan">
                                                    {{ __('Rombongan ?') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="row-jumlah" style="display: none;">
                                        <label for="jumlah" class="col-sm-3 col-form-label text-sm-right">Jumlah</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control {{$errors->has('jumlah') ? 'is-invalid' : ''}}" id="jumlah" name="jumlah" placeholder="Jumlah" value="{{old('jumlah', (isset($kunjungan) ? $kunjungan->jumlah : 1)) }}">
                                            @if($errors->has('jumlah'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('jumlah')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="asal_pengunjung" class="col-sm-3 col-form-label text-sm-right">Asal Pengunjung</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control {{$errors->has('asal_pengunjung') ? 'is-invalid' : ''}}" id="asal_pengunjung" name="asal_pengunjung" placeholder="Asal Pengunjung" value="{{old('asal_pengunjung', (isset($kunjungan) ? $kunjungan->asal_pengunjung : null)) }}">
                                            @if($errors->has('asal_pengunjung'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('asal_pengunjung')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <input type="hidden" name="tarif" id="tarif" value="0">

                                    <div class="form-group row">
                                        <label for="total_pembayaran" class="col-sm-3 col-form-label text-sm-right">Total Pembayaran</label>
                                        <div class="col-sm-9">
                                            <input type="number" autocomplete="false" style="padding: 0.375rem 0.75rem;" readonly class="form-control-plaintext {{$errors->has('total_pembayaran') ? 'is-invalid' : ''}}" id="total_pembayaran" name="total_pembayaran" placeholder="Total Pembayaran" value="{{old('total_pembayaran', (isset($kunjungan) ? $kunjungan->total_pembayaran : null)) }}">
                                            @if($errors->has('total_pembayaran'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('total_pembayaran')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-sm-10 offset-sm-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{route('app.kunjungan.index')}}" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </div>

                                @if(isset($kunjungan))
                                    <div class="col-sm-5">
                                        <div class="card">
                                            <div class="card-body text-center p-0">
                                                
                                                <iframe src="{{route('app.kunjungan.cetak_ticket', $kunjungan->id)}}" style="width: 100%; height: 400px;" frameborder="0"></iframe>
                                                
                                            </div>
                                        </div>
                                    </div>
                                @endif
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

            function onFormChangeHandler(){
                
                var enable_rombongan = $('#kategori_pengunjung_id').find('option:selected').data('enable_rombongan');
                var tarif_individu = $('#kategori_pengunjung_id').find('option:selected').data('tarif_individu');
                var tarif_rombongan = $('#kategori_pengunjung_id').find('option:selected').data('tarif_rombongan');
                
                if(enable_rombongan == 1){
                    $('#row-check-rombongan').show();
                }

                if(enable_rombongan == 0){
                    $('#row-check-rombongan').hide();
                    $("#rombongan").prop("checked", false);
                }
                
                var rombongan_is_checked = $('#rombongan').is(':checked');

                if(rombongan_is_checked){
                    var jumlah = $('#jumlah').val();
                }else{
                    var jumlah = 1;
                }

                

                console.log(tarif_individu, tarif_rombongan, rombongan_is_checked, jumlah);

                var tarif = 0;
                
                if(rombongan_is_checked){
                    tarif = tarif_rombongan;

                    $('#row-jumlah').show();
                    
                }else{
                    tarif = tarif_individu;
                    
                    $('#row-jumlah').hide();
                    $('#jumlah').val(1);
                }

                $('#tarif').val(tarif);
                $('#total_pembayaran').val(tarif * jumlah);
            
            }

            $('#kategori_pengunjung_id').on('change', onFormChangeHandler);
            $('#rombongan').on('change', onFormChangeHandler);
            $('#jumlah').on('input', onFormChangeHandler);


            onFormChangeHandler();

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
                url: '{{route('app.kunjungan.data')}}',
                columns: [
                    {
                        field: 'id',
                        title: 'Action',
                        class: 'text-nowrap',
                        formatter: function(value, row, index){
                           
                            return `
                                <a class="btn btn-sm btn-info" href="${base_url + '/app/kunjungan/' + value + '/edit'}"><i class="fa fa-edit"></i> Edit</a>
                                <form method="POST" action="${base_url + '/app/kunjungan/' + value}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete data ${row.name}?')">
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