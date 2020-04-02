@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">Koleksi - Biologika</div>
                    <div class="card-body">
                        
                        
                        @if(isset($collection_biologika))
                            <form action="{{ route('app.collection_biologika.update', $collection_biologika->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('app.collection_biologika.store')}}" method="POST" enctype="multipart/form-data">
                        @endif

                            @csrf

                            @isset($collection_biologika)
                                @method('PUT')
                            @endisset

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-4 col-form-label">nama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama" placeholder="nama" value="{{old('nama', (isset($collection_biologika) ? $collection_biologika->collection->nama : null)) }}">
                                            @if($errors->has('nama'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('nama')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="nomor_inventaris" class="col-sm-4 col-form-label">Nomor Inventaris</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('nomor_inventaris') ? 'is-invalid' : ''}}" id="nomor_inventaris" name="nomor_inventaris" placeholder="nomor_inventaris" value="{{old('nomor_inventaris', (isset($collection_biologika) ? $collection_biologika->collection->nomor_inventaris : null)) }}">
                                            @if($errors->has('nomor_inventaris'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('nomor_inventaris')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="tanggal_inventaris" class="col-sm-4 col-form-label">tanggal_inventaris</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control {{$errors->has('tanggal_inventaris') ? 'is-invalid' : ''}}" id="tanggal_inventaris" name="tanggal_inventaris" placeholder="tanggal_inventaris" value="{{old('tanggal_inventaris', (isset($collection_biologika) ? $collection_biologika->collection->tanggal_inventaris : null)) }}">
                                            @if($errors->has('tanggal_inventaris'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('tanggal_inventaris')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="tanggal_pengadaan" class="col-sm-4 col-form-label">tanggal_pengadaan</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control {{$errors->has('tanggal_pengadaan') ? 'is-invalid' : ''}}" id="tanggal_pengadaan" name="tanggal_pengadaan" placeholder="tanggal_pengadaan" value="{{old('tanggal_pengadaan', (isset($collection_biologika) ? $collection_biologika->collection->tanggal_pengadaan : null)) }}">
                                            @if($errors->has('tanggal_pengadaan'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('tanggal_pengadaan')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="kondisi" class="col-sm-4 col-form-label">kondisi</label>
                                        <div class="col-sm-8">
                                            
                                            <select type="text" class="form-control {{$errors->has('kondisi') ? 'is-invalid' : ''}}" id="kondisi" name="kondisi" placeholder="kondisi">
                                                <option {{old('kondisi', (isset($collection_biologika) ? $collection_biologika->collection->kondisi : null)) == 'Baik' ? 'selected=""' : '' }}  value="Baik">Baik</option>
                                                <option {{old('kondisi', (isset($collection_biologika) ? $collection_biologika->collection->kondisi : null)) == 'Rusak Ringan' ? 'selected=""' : '' }}  value="Rusak Ringan">Rusak Ringan</option>
                                                <option {{old('kondisi', (isset($collection_biologika) ? $collection_biologika->collection->kondisi : null)) == 'Rusak Berat' ? 'selected=""' : '' }}  value="Rusak Berat">Rusak Berat</option>
                                                <option {{old('kondisi', (isset($collection_biologika) ? $collection_biologika->collection->kondisi : null)) == 'Hilang' ? 'selected=""' : '' }}  value="Hilang">Hilang</option>
                                            </select>
                                            @if($errors->has('kondisi'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('kondisi')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="ukuran_berat" class="col-sm-4 col-form-label">ukuran_berat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('ukuran_berat') ? 'is-invalid' : ''}}" id="ukuran_berat" name="ukuran_berat" placeholder="ukuran_berat" value="{{old('ukuran_berat', (isset($collection_biologika) ? $collection_biologika->collection->ukuran_berat : null)) }}">
                                            @if($errors->has('ukuran_berat'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('ukuran_berat')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="ukuran_panjang" class="col-sm-4 col-form-label">ukuran_panjang</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('ukuran_panjang') ? 'is-invalid' : ''}}" id="ukuran_panjang" name="ukuran_panjang" placeholder="ukuran_panjang" value="{{old('ukuran_panjang', (isset($collection_biologika) ? $collection_biologika->collection->ukuran_panjang : null)) }}">
                                            @if($errors->has('ukuran_panjang'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('ukuran_panjang')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="ukuran_lebar" class="col-sm-4 col-form-label">ukuran_lebar</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('ukuran_lebar') ? 'is-invalid' : ''}}" id="ukuran_lebar" name="ukuran_lebar" placeholder="ukuran_lebar" value="{{old('ukuran_lebar', (isset($collection_biologika) ? $collection_biologika->collection->ukuran_lebar : null)) }}">
                                            @if($errors->has('ukuran_lebar'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('ukuran_lebar')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="ukuran_tinggi" class="col-sm-4 col-form-label">ukuran_tinggi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('ukuran_tinggi') ? 'is-invalid' : ''}}" id="ukuran_tinggi" name="ukuran_tinggi" placeholder="ukuran_tinggi" value="{{old('ukuran_tinggi', (isset($collection_biologika) ? $collection_biologika->collection->ukuran_tinggi : null)) }}">
                                            @if($errors->has('ukuran_tinggi'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('ukuran_tinggi')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="cara_perolehan" class="col-sm-4 col-form-label">cara_perolehan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('cara_perolehan') ? 'is-invalid' : ''}}" id="cara_perolehan" name="cara_perolehan" placeholder="cara_perolehan" value="{{old('cara_perolehan', (isset($collection_biologika) ? $collection_biologika->collection->cara_perolehan : null)) }}">
                                            @if($errors->has('cara_perolehan'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('cara_perolehan')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="tempat_perolehan" class="col-sm-4 col-form-label">tempat_perolehan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('tempat_perolehan') ? 'is-invalid' : ''}}" id="tempat_perolehan" name="tempat_perolehan" placeholder="tempat_perolehan" value="{{old('tempat_perolehan', (isset($collection_biologika) ? $collection_biologika->collection->tempat_perolehan : null)) }}">
                                            @if($errors->has('tempat_perolehan'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('tempat_perolehan')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lokasi_penempatan" class="col-sm-4 col-form-label">lokasi_penempatan</label>
                                        <div class="col-sm-8">
                                            <select class="form-control {{$errors->has('lokasi_penempatan') ? 'is-invalid' : ''}}" id="lokasi_penempatan" name="lokasi_penempatan" placeholder="lokasi_penempatan" >
                                                <option {{old('lokasi_penempatan', (isset($collection_bilogika) ? $collection_bilogika->collection->lokasi_penempatan : null)) == 'Storage' ? 'selected=""' : '' }} value="Storage">Storage</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_bilogika) ? $collection_bilogika->collection->lokasi_penempatan : null)) == 'Pameran Tetap' ? 'selected=""' : '' }} value="Pameran Tetap">Pameran Tetap</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_bilogika) ? $collection_bilogika->collection->lokasi_penempatan : null)) == 'Rumoh Aceh' ? 'selected=""' : '' }} value="Rumoh Aceh">Rumoh Aceh</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_bilogika) ? $collection_bilogika->collection->lokasi_penempatan : null)) == 'Ruang Prekon' ? 'selected=""' : '' }} value="Ruang Prekon">Ruang Prekon</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_bilogika) ? $collection_bilogika->collection->lokasi_penempatan : null)) == 'Lemari Arsip' ? 'selected=""' : '' }} value="Lemari Arsip">Lemari Arsip</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_bilogika) ? $collection_bilogika->collection->lokasi_penempatan : null)) == 'Gedung Edukasi' ? 'selected=""' : '' }} value="Gedung Edukasi">Gedung Edukasi</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_bilogika) ? $collection_bilogika->collection->lokasi_penempatan : null)) == 'Ruang Pustaka' ? 'selected=""' : '' }} value="Ruang Pustaka">Ruang Pustaka</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_bilogika) ? $collection_bilogika->collection->lokasi_penempatan : null)) == 'Dipinjamkan' ? 'selected=""' : '' }} value="Dipinjamkan">Dipinjamkan</option>

                                            </select>
                                            @if($errors->has('lokasi_penempatan'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('lokasi_penempatan')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="keterangan_penempatan" class="col-sm-4 col-form-label">keterangan_penempatan</label>
                                        <div class="col-sm-8">
                                            <textarea rows="6" class="form-control {{$errors->has('keterangan_penempatan') ? 'is-invalid' : ''}}" id="keterangan_penempatan" name="keterangan_penempatan" placeholder="keterangan_penempatan">{{old('keterangan_penempatan', (isset($collection_biologika) ? $collection_biologika->collection->keterangan_penempatan : null)) }}</textarea>
                                            @if($errors->has('keterangan_penempatan'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('keterangan_penempatan')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="nama_pencatat" class="col-sm-4 col-form-label">nama_pencatat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('nama_pencatat') ? 'is-invalid' : ''}}" id="nama_pencatat" name="nama_pencatat" placeholder="nama_pencatat" value="{{old('nama_pencatat', (isset($collection_biologika) ? $collection_biologika->collection->nama_pencatat : null)) }}">
                                            @if($errors->has('nama_pencatat'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('nama_pencatat')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="asal_usul" class="col-sm-4 col-form-label">asal_usul</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('asal_usul') ? 'is-invalid' : ''}}" id="asal_usul" name="asal_usul" placeholder="asal_usul" value="{{old('asal_usul', (isset($collection_biologika) ? $collection_biologika->collection->asal_usul : null)) }}">
                                            @if($errors->has('asal_usul'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('asal_usul')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="kode_aset" class="col-sm-4 col-form-label">kode_aset</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('kode_aset') ? 'is-invalid' : ''}}" id="kode_aset" name="kode_aset" placeholder="kode_aset" value="{{old('kode_aset', (isset($collection_biologika) ? $collection_biologika->collection->kode_aset : null)) }}">
                                            @if($errors->has('kode_aset'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('kode_aset')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="deskripsi_singkat" class="col-sm-4 col-form-label">deskripsi_singkat</label>
                                        <div class="col-sm-8">
                                            <textarea rows="6" class="form-control {{$errors->has('deskripsi_singkat') ? 'is-invalid' : ''}}" id="deskripsi_singkat" name="deskripsi_singkat" placeholder="deskripsi_singkat">{{old('deskripsi_singkat', (isset($collection_biologika) ? $collection_biologika->collection->deskripsi_singkat : null)) }}</textarea>
                                            @if($errors->has('deskripsi_singkat'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('deskripsi_singkat')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="published" class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="published" name="published" value="1" {{old('published', (isset($collection_biologika) ? ($collection_biologika->collection->published ? 'checked=""' : '') : 'checked=""')) }}>
                                                <label class="custom-control-label" for="published">Publikasi</label>
                                            </div>
                                            @if($errors->has('published'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('published')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">


                                    <div class="form-group row">
                                        <label for="nama_latin" class="col-sm-4 col-form-label">nama_latin</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('nama_latin') ? 'is-invalid' : ''}}" id="nama_latin" name="nama_latin" placeholder="nama_latin" value="{{old('nama_latin', (isset($collection_biologika->nama_latin) ? $collection_biologika->nama_latin : null)) }}">
                                            @if($errors->has('nama_latin'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('nama_latin')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kingdom" class="col-sm-4 col-form-label">kingdom</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('kingdom') ? 'is-invalid' : ''}}" id="kingdom" name="kingdom" placeholder="kingdom" value="{{old('kingdom', (isset($collection_biologika->kingdom) ? $collection_biologika->kingdom : null)) }}">
                                            @if($errors->has('kingdom'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('kingdom')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phylum" class="col-sm-4 col-form-label">phylum</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('phylum') ? 'is-invalid' : ''}}" id="phylum" name="phylum" placeholder="phylum" value="{{old('phylum', (isset($collection_biologika->phylum) ? $collection_biologika->phylum : null)) }}">
                                            @if($errors->has('phylum'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('phylum')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="class" class="col-sm-4 col-form-label">class</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('class') ? 'is-invalid' : ''}}" id="class" name="class" placeholder="class" value="{{old('class', (isset($collection_biologika->class) ? $collection_biologika->class : null)) }}">
                                            @if($errors->has('class'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('class')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="order" class="col-sm-4 col-form-label">order</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('order') ? 'is-invalid' : ''}}" id="order" name="order" placeholder="order" value="{{old('order', (isset($collection_biologika->order) ? $collection_biologika->order : null)) }}">
                                            @if($errors->has('order'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('order')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sub_order" class="col-sm-4 col-form-label">sub_order</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('sub_order') ? 'is-invalid' : ''}}" id="sub_order" name="sub_order" placeholder="sub_order" value="{{old('sub_order', (isset($collection_biologika->sub_order) ? $collection_biologika->sub_order : null)) }}">
                                            @if($errors->has('sub_order'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('sub_order')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="famili" class="col-sm-4 col-form-label">famili</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('famili') ? 'is-invalid' : ''}}" id="famili" name="famili" placeholder="famili" value="{{old('famili', (isset($collection_biologika->famili) ? $collection_biologika->famili : null)) }}">
                                            @if($errors->has('famili'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('famili')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sub_famili" class="col-sm-4 col-form-label">sub_famili</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('sub_famili') ? 'is-invalid' : ''}}" id="sub_famili" name="sub_famili" placeholder="sub_famili" value="{{old('sub_famili', (isset($collection_biologika->sub_famili) ? $collection_biologika->sub_famili : null)) }}">
                                            @if($errors->has('sub_famili'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('sub_famili')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="genus" class="col-sm-4 col-form-label">genus</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('genus') ? 'is-invalid' : ''}}" id="genus" name="genus" placeholder="genus" value="{{old('genus', (isset($collection_biologika->genus) ? $collection_biologika->genus : null)) }}">
                                            @if($errors->has('genus'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('genus')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="spesies" class="col-sm-4 col-form-label">spesies</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('spesies') ? 'is-invalid' : ''}}" id="spesies" name="spesies" placeholder="spesies" value="{{old('spesies', (isset($collection_biologika->spesies) ? $collection_biologika->spesies : null)) }}">
                                            @if($errors->has('spesies'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('spesies')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sub_species" class="col-sm-4 col-form-label">sub_species</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('sub_species') ? 'is-invalid' : ''}}" id="sub_species" name="sub_species" placeholder="sub_species" value="{{old('sub_species', (isset($collection_biologika->sub_species) ? $collection_biologika->sub_species : null)) }}">
                                            @if($errors->has('sub_species'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('sub_species')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="habitat" class="col-sm-4 col-form-label">habitat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('habitat') ? 'is-invalid' : ''}}" id="habitat" name="habitat" placeholder="habitat" value="{{old('habitat', (isset($collection_biologika->habitat) ? $collection_biologika->habitat : null)) }}">
                                            @if($errors->has('habitat'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('habitat')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="endemik" class="col-sm-4 col-form-label">endemik</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('endemik') ? 'is-invalid' : ''}}" id="endemik" name="endemik" placeholder="endemik" value="{{old('endemik', (isset($collection_biologika->endemik) ? $collection_biologika->endemik : null)) }}">
                                            @if($errors->has('endemik'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('endemik')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-4 col-form-label">status</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('status') ? 'is-invalid' : ''}}" id="status" name="status" placeholder="status" value="{{old('status', (isset($collection_biologika->status) ? $collection_biologika->status : null)) }}">
                                            @if($errors->has('status'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('status')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="warna" class="col-sm-4 col-form-label">warna</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('warna') ? 'is-invalid' : ''}}" id="warna" name="warna" placeholder="warna" value="{{old('warna', (isset($collection_biologika->warna) ? $collection_biologika->warna : null)) }}">
                                            @if($errors->has('warna'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('warna')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="teknik_pengawetan" class="col-sm-4 col-form-label">teknik_pengawetan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('teknik_pengawetan') ? 'is-invalid' : ''}}" id="teknik_pengawetan" name="teknik_pengawetan" placeholder="teknik_pengawetan" value="{{old('teknik_pengawetan', (isset($collection_biologika->teknik_pengawetan) ? $collection_biologika->teknik_pengawetan : null)) }}">
                                            @if($errors->has('teknik_pengawetan'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('teknik_pengawetan')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="petugas_preparasi" class="col-sm-4 col-form-label">petugas_preparasi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('petugas_preparasi') ? 'is-invalid' : ''}}" id="petugas_preparasi" name="petugas_preparasi" placeholder="petugas_preparasi" value="{{old('petugas_preparasi', (isset($collection_biologika->petugas_preparasi) ? $collection_biologika->petugas_preparasi : null)) }}">
                                            @if($errors->has('petugas_preparasi'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('petugas_preparasi')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    

                                    



                                </div>
                            </div>
                            

                            

                            <div class="row mt-3">
                                <div class="col-sm-12 text-right">

                                    <hr>
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="{{route('app.collection.index')}}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

