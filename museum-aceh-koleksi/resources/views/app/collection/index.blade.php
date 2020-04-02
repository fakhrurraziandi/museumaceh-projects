<?php  

$collection_type = camelcase_to_underscore(str_replace('App\\Collection', '', $collectionable_type));

?>
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">
                        Koleksi {{ucwords($collection_type)}}
                    </div>
                    <div class="card-body">
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
                // showToggle: true,
                // showColumns: true,
                // showExport: true,
                // showPaginationSwitch: true,
                pagination: true,
                pageList: [10, 25, 50, 100, 'ALL'],
                // showFooter: false,
                sidePagination: 'server',
                url: '{{route('app.collection_'. $collection_type .'.data')}}',
                columns: [
                    {
                        field: 'id',
                        title: 'Action',
                        class: 'text-nowrap',
                        formatter: function(value, row, index){
                           
                            return `
                                <a class="btn btn-sm btn-info" href="${base_url + '/app/collection_{{$collection_type}}/' + value}"><i class="fa fa-edit"></i> Detail</a>
                            `;
                        }
                    },

                    
                    {field: 'nama', title: 'Nama'},
                    {field: 'nomor_inventaris', title: 'Nomor Inventaris'},
                    {field: 'image_archive_count', title: 'Jumlah Gambar'},
                    {field: 'id', title: 'Dilihat Sebanyak'},
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