<?php  

$collection_type = camelcase_to_underscore(str_replace('App\\Collection', '', $collectionable_type));

?>

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">Koleksi - {{$collection_type}}</div>
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="mb-4">
                                    <h3>{{${'collection_'. $collection_type}->collection->nama}}</h3>
                                    <h6>#{{${'collection_'. $collection_type}->collection->nomor_inventaris}}</h6>
                                </div>

                                <table class="table-striped">
                                    <tbody>
                                        <tr><td class="py-1 px-3">nama</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->nama}}</td></tr>
                                        <tr><td class="py-1 px-3">nomor_inventaris</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->nomor_inventaris}}</td></tr>
                                        <tr><td class="py-1 px-3">tanggal_inventaris</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->tanggal_inventaris}}</td></tr>
                                        <tr><td class="py-1 px-3">tanggal_pengadaan</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->tanggal_pengadaan}}</td></tr>
                                        <tr><td class="py-1 px-3">kondisi</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->kondisi}}</td></tr>
                                        <tr><td class="py-1 px-3">ukuran_berat</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->ukuran_berat}}</td></tr>
                                        <tr><td class="py-1 px-3">ukuran_panjang</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->ukuran_panjang}}</td></tr>
                                        <tr><td class="py-1 px-3">ukuran_lebar</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->ukuran_lebar}}</td></tr>
                                        <tr><td class="py-1 px-3">ukuran_tinggi</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->ukuran_tinggi}}</td></tr>
                                        <tr><td class="py-1 px-3">cara_perolehan</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->cara_perolehan}}</td></tr>
                                        <tr><td class="py-1 px-3">tempat_perolehan</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->tempat_perolehan}}</td></tr>
                                        <tr><td class="py-1 px-3">lokasi_penempatan</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->lokasi_penempatan}}</td></tr>
                                        <tr><td class="py-1 px-3">keterangan_penempatan</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->keterangan_penempatan}}</td></tr>
                                        <tr><td class="py-1 px-3">nama_pencatat</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->nama_pencatat}}</td></tr>
                                        <tr><td class="py-1 px-3">asal_usul</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->asal_usul}}</td></tr>
                                        <tr><td class="py-1 px-3">kode_aset</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->kode_aset}}</td></tr>
                                        <tr><td class="py-1 px-3">deskripsi_singkat</td><td class="py-1 px-3">:</td><td class="py-1 px-3">{{${'collection_'. $collection_type}->collection->deskripsi_singkat}}</td></tr>


                                        <?php $collectionable = new $collectionable_type() ?>

                                        @foreach($collectionable->getFillable() as $fillable)
                                            <tr><td class="py-1 px-3">{{$fillable}}</td><td class="py-1 px-3">:</td><td class="py-1 px-3"><?php echo ${'collection_'. $collection_type}->$fillable ?></td></tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-sm-6">

                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <h5>Gambar</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    @forelse(${'collection_'. $collection_type}->collection->image_archives as $image_archive)
                                        <div class="col-sm-4">
                                            <a href="{{asset($image_archive->file)}}" data-lightbox="{{asset($image_archive->file)}}" data-title="{{asset($image_archive->file)}}">
                                                <img src="{{asset($image_archive->file)}}" style="width: 100%;" />
                                            </a>
                                        </div>
                                    @empty
                                        <div class="col-sm-12 text-center">
                                            <p>Belum ada gambar yang tersedia</p>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

