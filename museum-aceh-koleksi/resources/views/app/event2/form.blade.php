@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">{{ isset($event2) ? 'Ubah Event' : 'Tambah Event' }}</div>
                    <div class="card-body">
                        
                        
                        @if(isset($event2))
                            <form action="{{ route('app.event2.update', $event2->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('app.event2.store')}}" method="POST" enctype="multipart/form-data">
                        @endif

                            @csrf

                            @isset($event2)
                                @method('PUT')
                            @endisset


                            <div class="form-group row"> <label for="nama_kegiatan" class="col-sm-2 col-form-label text-sm-right">nama_kegiatan</label> <div class="col-sm-10"> <input type="text" class="form-control {{$errors->has('nama_kegiatan') ? 'is-invalid' : ''}}" id="nama_kegiatan" name="nama_kegiatan" placeholder="nama_kegiatan" value="{{old('nama_kegiatan', (isset($event2->nama_kegiatan) ? $event2->nama_kegiatan : null)) }}"> @if($errors->has('nama_kegiatan')) <div class="invalid-feedback"> {{$errors->first('nama_kegiatan')}} </div> @endif </div> </div>


                            <div class="form-group row">
                                <label for="jenis" class="col-sm-2 col-form-label text-sm-right">jenis</label>
                                <div class="col-sm-10">
                                    <select class="form-control {{$errors->has('jenis') ? 'is-invalid' : ''}}" id="jenis" name="jenis" placeholder="jenis" >
                                        <option {{old('jenis', (isset($event2) ? $event2->jenis: null)) == 'Event' ? 'selected=""' : '' }} value="Event">Event</option>
                                        <option {{old('jenis', (isset($event2) ? $event2->jenis: null)) == 'Pameran' ? 'selected=""' : '' }} value="Pameran">Pameran</option>
                                        <option {{old('jenis', (isset($event2) ? $event2->jenis: null)) == 'Event & Pameran' ? 'selected=""' : '' }} value="Event & Pameran">Event & Pameran</option>

                                    </select>
                                    @if($errors->has('jenis'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('jenis')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row"> <label for="tanggal_mulai" class="col-sm-2 col-form-label text-sm-right">tanggal_mulai</label> <div class="col-sm-10"> <input type="date" class="form-control {{$errors->has('tanggal_mulai') ? 'is-invalid' : ''}}" id="tanggal_mulai" name="tanggal_mulai" placeholder="tanggal_mulai" value="{{old('tanggal_mulai', (isset($event2->tanggal_mulai) ? $event2->tanggal_mulai : null)) }}"> @if($errors->has('tanggal_mulai')) <div class="invalid-feedback"> {{$errors->first('tanggal_mulai')}} </div> @endif </div> </div>
                            <div class="form-group row"> <label for="tanggal_selesai" class="col-sm-2 col-form-label text-sm-right">tanggal_selesai</label> <div class="col-sm-10"> <input type="date" class="form-control {{$errors->has('tanggal_selesai') ? 'is-invalid' : ''}}" id="tanggal_selesai" name="tanggal_selesai" placeholder="tanggal_selesai" value="{{old('tanggal_selesai', (isset($event2->tanggal_selesai) ? $event2->tanggal_selesai : null)) }}"> @if($errors->has('tanggal_selesai')) <div class="invalid-feedback"> {{$errors->first('tanggal_selesai')}} </div> @endif </div> </div>
                            <div class="form-group row"> <label for="penyelenggara" class="col-sm-2 col-form-label text-sm-right">penyelenggara</label> <div class="col-sm-10"> <input type="text" class="form-control {{$errors->has('penyelenggara') ? 'is-invalid' : ''}}" id="penyelenggara" name="penyelenggara" placeholder="penyelenggara" value="{{old('penyelenggara', (isset($event2->penyelenggara) ? $event2->penyelenggara : null)) }}"> @if($errors->has('penyelenggara')) <div class="invalid-feedback"> {{$errors->first('penyelenggara')}} </div> @endif </div> </div>
                            <div class="form-group row"> 
                                <label for="description" class="col-sm-2 col-form-label text-sm-right">description</label> 
                                <div class="col-sm-10"> 
                                    <textarea rows="6" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" id="description" name="description" placeholder="description" >{{old('description', (isset($event2->description) ? $event2->description : null)) }}</textarea>
                                    @if($errors->has('description')) 
                                        <div class="invalid-feedback"> 
                                            {{$errors->first('description')}} 
                                        </div> 
                                    @endif 
                                </div> 
                            </div>

                            

                            <div class="row mt-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('app.event2.index')}}" class="btn btn-secondary">Cancel</a>
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
                url: '{{route('app.event2.data')}}',
                columns: [
                    {
                        field: 'id',
                        title: 'Action',
                        class: 'text-nowrap',
                        formatter: function(value, row, index){
                           
                            return `
                                <a class="btn btn-sm btn-info" href="${base_url + '/app/event2/' + value + '/edit'}"><i class="fa fa-edit"></i> Edit</a>
                                <form method="POST" action="${base_url + '/app/event2/' + value}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete data ${row.name}?')">
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