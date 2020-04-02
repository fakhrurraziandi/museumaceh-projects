@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">
                        Kunjungan
                    </div>
                    <div class="card-body">
                        <div id="table-data-toolbar">
                            <a href="{{route('app.kunjungan.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                        </div>
                        <table id="table-data"></table>
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
                sortOrder: 'DESC',
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
                                
                                <a class="btn btn-sm btn-info" href="${base_url + '/app/kunjungan/' + value + '/cetak_ticket'}" target="_blank"><i class="fa fa-print"></i> Cetak Tiket</a>

                                <?php if(Auth::user()->role == 'admin'): ?>
                                    <form method="POST" action="${base_url + '/app/kunjungan/' + value}" class="d-inline" onsubmit="return confirm('Anda yakin ingin menghapus data ${row.id}?')">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                                    </form>
                                <?php endif ?>
                            `;
                        }
                    },

                    {
                        field: 'kategori_pengunjung',
                        title: 'Kategori Pengunjung',
                        formatter: function(kategori_pengunjung){
                            return kategori_pengunjung ? kategori_pengunjung.nama : null;
                        }
                    },
                    {
                        field: 'rombongan',
                        title: 'Rombongan',
                        formatter: function(rombongan){
                            return rombongan ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-times text-danger"></i>'
                        }
                    },
                    {
                        field: 'jumlah',
                        title: 'Jumlah',
                    },

                    {
                        field: 'asal_pengunjung',
                        title: 'Asal Pengunjung',
                    },


                    {
                        field: 'kode_booking',
                        title: 'Kode Booking',
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