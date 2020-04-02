@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        Events
                    </div>
                    <div class="card-body">
                        <div id="table-data-toolbar">
                            <a href="{{route('admin.event.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
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
                eventList: [10, 25, 50, 100, 'ALL'],
                // showFooter: false,
                sidePagination: 'server',
                url: '{{route('admin.event.data')}}',
                columns: [
                    {
                        field: 'id',
                        title: 'Action',
                        sortable: true,
                        class: 'text-nowrap',
                        formatter: function(value, row, index){
                           
                            return `
                                <a class="btn btn-sm btn-info" href="${base_url + '/admin/event/' + value + '/edit'}"><i class="fa fa-edit"></i> Edit</a>
                                <form method="POST" action="${base_url + '/admin/event/' + value}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete data ${row.title}?')">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            `;
                        }
                    },
                    {
                        field: 'title',
                        title: 'Title',
                    },
                    // {
                    //     field: 'slug',
                    //     title: 'Slug',
                    // },

                    {
                        field: 'event_date',
                        title: 'Event Date'
                    },
                    {
                        field: 'location',
                        title: 'Location',
                    },
                    {
                        field: 'featured_image',
                        title: 'Featured Image',
                        formatter: function (featured_image){
                            return featured_image ? '<img style="width: 300px;" src="'+  base_url + featured_image +'" />' : null;
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