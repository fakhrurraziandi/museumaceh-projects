@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        Contact Messages
                    </div>
                    <div class="card-body">
                        <div id="table-data-toolbar">
                            <a href="{{route('admin.contact_message.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
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
                // showToggle: true,
                // showColumns: true,
                // showExport: true,
                // showPaginationSwitch: true,
                pagination: true,
                pageList: [10, 25, 50, 100, 'ALL'],
                // showFooter: false,
                sidePagination: 'server',
                url: '{{route('admin.contact_message.data')}}',
                columns: [
                    {
                        field: 'id',
                        title: 'Action',
                        sortable: true,
                        class: 'text-nowrap',
                        formatter: function(value, row, index){
                           
                            return `
                                <a class="btn btn-sm btn-info" href="${base_url + '/admin/contact_message/' + value}"><i class="fa fa-edit"></i> Detail</a>
                            `;
                        }
                    },
                    
                    {
                        field: 'id',
                        title: 'ID',
                        sortable: true,
                    },
                    {
                        field: 'name',
                        title: 'Name',
                        sortable: true,
                    },
                    {
                        field: 'email',
                        title: 'Email',
                        sortable: true,
                    },
                    {
                        field: 'category',
                        title: 'Category',
                        sortable: true,
                    },
                    {
                        field: 'message',
                        title: 'Message',
                        sortable: true,
                        formatter: function(message){
                            return message ? message.substr(0, 100) + ' [...]' : null;
                        }
                    },
                    
                    {
                        field: 'created_at',
                        title: 'Created at',
                        sortable: true,
                    },
                    {
                        field: 'updated_at',
                        title: 'Updated at',
                        sortable: true,
                    },
                ]
            });

        });
    </script>
@endsection