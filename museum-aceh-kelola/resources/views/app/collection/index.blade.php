@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">
                        Koleksi
                    </div>
                    <div class="card-body">
                        <div id="table-data-toolbar">
                           
                            


                            <form class="form-inline">

                                <div class="dropdown">
                                    <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tambah
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{route('app.collection_geologika.create')}}">Geologika</a>
                                        <a class="dropdown-item" href="{{route('app.collection_biologika.create')}}">Biologika</a>
                                        <a class="dropdown-item" href="{{route('app.collection_etnografika.create')}}">Etnografika</a>
                                        <a class="dropdown-item" href="{{route('app.collection_arkeologika.create')}}">Arkeologika</a>
                                        <a class="dropdown-item" href="{{route('app.collection_historika.create')}}">Historika</a>
                                        <a class="dropdown-item" href="{{route('app.collection_numismatika.create')}}">Numismatika</a>
                                        <a class="dropdown-item" href="{{route('app.collection_filologika.create')}}">Filologika</a>
                                        <a class="dropdown-item" href="{{route('app.collection_keramonologika.create')}}">Keramonologika</a>
                                        <a class="dropdown-item" href="{{route('app.collection_seni_rupa.create')}}">Seni Rupa</a>
                                        <a class="dropdown-item" href="{{route('app.collection_teknologika.create')}}">Teknologika</a>
                                    </div>
                                </div>
                                
                                <div class="form-group mx-sm-3">
                                    <label for="inputPassword2" class="sr-only">Jenis</label>
                                    
                                    <select name="collectionable_type" id="collectionable_type" class="form-control">
                                        <option value="">Semua Jenis</option>
                                        <option value="App\CollectionGeologika">Geologika</a>
                                        <option value="App\CollectionBiologika">Biologika</a>
                                        <option value="App\CollectionEtnografika">Etnografika</a>
                                        <option value="App\CollectionArkeologika">Arkeologika</a>
                                        <option value="App\CollectionHistorika">Historika</a>
                                        <option value="App\CollectionNumismatika">Numismatika</a>
                                        <option value="App\CollectionFilologika">Filologika</a>
                                        <option value="App\CollectionKeramonologika">Keramonologika</a>
                                        <option value="App\CollectionSeniRupa">Seni Rupa</a>
                                        <option value="App\CollectionTeknologika">Teknologika</a>
                                    </select>
                                </div>

                                Cetak: <a href="{{route('app.collection.create')}}" class="btn btn-link btn-lg"><i class="fa fa-print text-dark" style="font-size: 24px;"></i></a>
                                
                            </form>

                            

                            
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

            $('#collectionable_type').on('change', function(){
                $('#table-data').bootstrapTable('refresh');
            });

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
                queryParams: function(params){
                    var collectionable_type = $('#collectionable_type').val();
                    params.collectionable_type = collectionable_type;
                    return params;
                },
                url: '{{route('app.collection.data')}}',
                columns: [
                    {
                        field: 'id',
                        title: 'Action',
                        class: 'text-nowrap',
                        formatter: function(value, row, index){
                           
                            return `
                                <a class="btn btn-sm btn-info" href="${base_url + '/app/collection/' + value + '/edit'}"><i class="fa fa-edit"></i> Edit</a>
                                <form method="POST" action="${base_url + '/app/collection/' + value}" class="d-inline" onsubmit="return confirm('Anda yakin ingin menghapus data ${row.nama}?')">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>
                                    <a class="btn btn-sm btn-warning" href="${base_url + '/app/collection/' + value + '/image_archive'}"><i class="fa fa-file-image-o"></i> Arsip Gambar</a>
                                    <a class="btn btn-sm btn-success" href="${base_url + '/app/collection/' + value + '/digital_collection'}"><i class="fa fa-file-o"></i> Koleksi Digital</a>
                                </form>
                            `;
                        }
                    },

                    {field: 'kategori', title: 'Kategori'},
                    {field: 'nama', title: 'Nama'},
                    {field: 'nomor_inventaris', title: 'Nomor Inventaris'},
                    {field: 'tanggal_inventaris', title: 'Tanggal Inventaris'},
                    {field: 'tanggal_pengadaan', title: 'Tanggal Pengadaan'},
                    {field: 'lokasi_penempatan', title: 'Lokasi Penempatan'},
                    {field: 'kondisi', title: 'Kondisi'},
                    {field: 'published', title: 'Publikasi', formatter: function(value){ return value ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-times text-danger"></i>' }},
                    
                    {
                        field: 'created_at',
                        title: 'Tanggal Input',
                    },
                    // {
                    //     field: 'updated_at',
                    //     title: 'Updated at',
                    // },
                ]
            });

        });
    </script>
@endsection