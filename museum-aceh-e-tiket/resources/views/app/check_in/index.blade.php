@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">
                        Check in Kunjungan
                    </div>
                    <div class="card-body">
                        <form id="form_check_in">

                            
                            
                            <div class="form-group">
                                <label for="id">Kode Tiket</label>
                                <input type="text" class="form-control" id="id" name="id" placeholder="Kode Tiket" autofocus="">
                            </div>

                            <div class="my-4">
                                <?php $x = 0 ?>
                                @foreach(App\Booth::all() as $booth)
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="{{str_slug($booth->nama)}}" value="{{$booth->id}}" name="booth_id" class="custom-control-input" {{ $x == 0 ? 'checked=""' : '' }}> 
                                        <label class="custom-control-label" for="{{str_slug($booth->nama)}}">{{$booth->nama}}<label>
                                    </div>

                                    <?php $x++ ?>
                                @endforeach
                                
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-check"></i> Check in</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">
                        Kunjungan
                    </div>
                    <div class="card-body">
                        <div id="table-data-toolbar">
                            
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

            function formCheckInOnSubmitHandler(e){
                console.log('submitted');
                e.preventDefault();

                var id = $('#id').val();
                var booth_id = $('input[type="radio"][name="booth_id"]:checked').val();
                
                

                var form = $(this);
                    
                $.ajax({
                    url: base_url + '/app/check_in/find',
                    type: 'POST',
                    data: {
                        id: id,
                        booth_id: booth_id
                    },
                    success: function(response){

                        

                        // reset form validation
                        form.find('.is-invalid').removeClass('is-invalid');
                        form.find('.invalid-feedback').remove();

                        if(response.status){
                            // alert(response.message);
                            
                            $('#id').val('').focus();
                            $('#table-data').bootstrapTable('refresh');
                        }else{
                            alert(response.message);
                            $('#id').val('').focus();
                            $.each(response.errors, function(field, messages){
                                console.log(field, messages);
                                form.find('#' + field).addClass('is-invalid').parent().append(`
                                    <span class="invalid-feedback" role="alert">
                                        <strong>${messages[0]}<strong>
                                    </span>
                                `);
                            });
                        }
                    }
                });
            }

            function idOnKeyPressHandler(e){
                console.log('keypressed');
                if (e.which == 13) {

                    $('#form_check_in').submit();
                    return false;    //<---- Add this line
                }
            }

            $('#id').keypress(idOnKeyPressHandler);
            $('#form_check_in').on('submit', formCheckInOnSubmitHandler);

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
                url: '{{route('app.check_in.data')}}',
                columns: [
                    

                    {
                        valign: 'top',
                        field: 'kode',
                        title: 'Kode',
                    },

                    {
                        valign: 'top',
                        field: 'kunjungan',
                        title: 'Kategori Pengunjung',
                        formatter: function(kunjungan){
                            return kunjungan ? kunjungan.kategori_pengunjung.nama : null;
                        }
                    },

                    {
                        valign: 'top',
                        field: 'booth',
                        title: 'Booth',
                        formatter: function(booths){
                            var html = '';
                            
                            html += '<ul class="pl-3">';
                            
                            booths.forEach(function(booth){
                                html += '<li>';
                                html += booth.nama;
                                html += '</li>';
                            });
                            
                            html += '</ul>';
                            return html;
                        }
                    },

                    {
                        valign: 'top',
                        field: 'created_at',
                        title: 'Created at',
                    },
                    {
                        valign: 'top',
                        field: 'updated_at',
                        title: 'Updated at',
                    },
                ]
            });

        });
    </script>
@endsection