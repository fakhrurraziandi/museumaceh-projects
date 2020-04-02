@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">Kunjungan</div>
                    <div class="card-body">

                        
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group row">
                                    <label for="kategori_pengunjung_id" class="col-sm-3 col-form-label text-sm-right">Kategori</label>
                                    <div class="col-sm-9">
                                        <select disabled="" class="form-control" id="kategori_pengunjung_id" name="kategori_pengunjung_id">
                                            <option value="{{$kunjungan->kategori_pengunjung->id}}">{{$kunjungan->kategori_pengunjung->nama}}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-7 offset-md-3">
                                        <div class="form-check">
                                            <input disabled="" class="form-check-input" type="checkbox" name="rombongan" id="rombongan" value="1" {{ $kunjungan->rombongan ? 'checked' : '' }}>

                                            <label class="form-check-label" for="rombongan">
                                                {{ __('Rombongan ?') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row" id="row-jumlah" style="display: none;">
                                    <label for="jumlah" class="col-sm-3 col-form-label text-sm-right">Jumlah </label>
                                    <div class="col-sm-3">
                                        <input  type="number" class="form-control {{$errors->has('jumlah') ? 'is-invalid' : ''}}" id="jumlah" name="jumlah" placeholder="Jumlah" value="{{ $kunjungan->jumlah }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="asal_pengunjung" class="col-sm-3 col-form-label text-sm-right">Asal Pengunjung</label>
                                    <div class="col-sm-9">
                                        <input disabled="" type="text" class="form-control {{$errors->has('asal_pengunjung') ? 'is-invalid' : ''}}" id="asal_pengunjung" name="asal_pengunjung" placeholder="Asal Pengunjung" value="{{ $kunjungan->asal_pengunjung  }}">
                                    </div>
                                </div>

                                <input type="hidden" name="tarif" id="tarif" value="0">

                                <div class="form-group row">
                                    <label for="total_pembayaran" class="col-sm-3 col-form-label text-sm-right">Total Pembayaran</label>
                                    <div class="col-sm-9">
                                        <input disabled="" type="text" style="padding: 0.375rem 0.75rem;" class="form-control-plaintext" value="{{ 'Rp. '. number_format($kunjungan->total_pembayaran, 0, ',', '.') }}">
                                        @if($errors->has('total_pembayaran'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('total_pembayaran')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-sm-10 offset-sm-3">
                                        <a href="{{route('app.kunjungan.index')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
                                        <a href="{{route('app.kunjungan.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>  Kunjungan Baru</a>
                                        <a href="{{route('app.kunjungan.cetak_ticket', $kunjungan)}}" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> Cetak Tiket</a>
                                        
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
                
                var tarif_individu = $('#kategori_pengunjung_id').find('option:selected').data('tarif_individu');
                var tarif_rombongan = $('#kategori_pengunjung_id').find('option:selected').data('tarif_rombongan');

                var rombongan_is_checked = $('#rombongan').is(':checked');

                var jumlah = $('#jumlah').val();

                console.log(tarif_individu, tarif_rombongan, rombongan_is_checked, jumlah);

                var tarif = 0;
                if(rombongan_is_checked){
                    tarif = tarif_rombongan;

                    $('#row-jumlah').show();
                    $('#jumlah').val(2);
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
            $('#jumlah').on('change', onFormChangeHandler);


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