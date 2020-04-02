@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        Users
                    </div>
                    <div class="card-body">
                        <div id="table-data-toolbar">
                            <a href="{{route('admin.user.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
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
                url: '{{route('admin.user.data')}}',
                columns: [
                    {
                        field: 'id',
                        title: 'Action',
                        sortable: true,
                        class: 'text-nowrap',
                        formatter: function(value, row, index){
                           
                            return `
                                <a class="btn btn-sm btn-info" href="${base_url + '/admin/user/' + value + '/edit'}"><i class="fa fa-edit"></i> Edit</a>
                                <form method="POST" action="${base_url + '/admin/user/' + value}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete data ${row.name}?')">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>
                                </form>
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
                        field: 'role',
                        title: 'Role',
                        sortable: true,
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