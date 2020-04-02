@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">Koleksi - Seni Rupa</div>
                    <div class="card-body">
                        
                        
                        @if(isset($collection_seni_rupa))
                            <form action="{{ route('app.collection_seni_rupa.update', $collection_seni_rupa->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('app.collection_seni_rupa.store')}}" method="POST" enctype="multipart/form-data">
                        @endif

                            @csrf

                            @isset($collection_seni_rupa)
                                @method('PUT')
                            @endisset

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-4 col-form-label">nama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama" placeholder="nama" value="{{old('nama', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->nama : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('nomor_inventaris') ? 'is-invalid' : ''}}" id="nomor_inventaris" name="nomor_inventaris" placeholder="nomor_inventaris" value="{{old('nomor_inventaris', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->nomor_inventaris : null)) }}">
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
                                            <input type="date" class="form-control {{$errors->has('tanggal_inventaris') ? 'is-invalid' : ''}}" id="tanggal_inventaris" name="tanggal_inventaris" placeholder="tanggal_inventaris" value="{{old('tanggal_inventaris', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->tanggal_inventaris : null)) }}">
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
                                            <input type="date" class="form-control {{$errors->has('tanggal_pengadaan') ? 'is-invalid' : ''}}" id="tanggal_pengadaan" name="tanggal_pengadaan" placeholder="tanggal_pengadaan" value="{{old('tanggal_pengadaan', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->tanggal_pengadaan : null)) }}">
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
                                                <option {{old('kondisi', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->kondisi : null)) == 'Baik' ? 'selected=""' : '' }}  value="Baik">Baik</option>
                                                <option {{old('kondisi', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->kondisi : null)) == 'Rusak Ringan' ? 'selected=""' : '' }}  value="Rusak Ringan">Rusak Ringan</option>
                                                <option {{old('kondisi', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->kondisi : null)) == 'Rusak Berat' ? 'selected=""' : '' }}  value="Rusak Berat">Rusak Berat</option>
                                                <option {{old('kondisi', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->kondisi : null)) == 'Hilang' ? 'selected=""' : '' }}  value="Hilang">Hilang</option>
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_berat') ? 'is-invalid' : ''}}" id="ukuran_berat" name="ukuran_berat" placeholder="ukuran_berat" value="{{old('ukuran_berat', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->ukuran_berat : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_panjang') ? 'is-invalid' : ''}}" id="ukuran_panjang" name="ukuran_panjang" placeholder="ukuran_panjang" value="{{old('ukuran_panjang', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->ukuran_panjang : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_lebar') ? 'is-invalid' : ''}}" id="ukuran_lebar" name="ukuran_lebar" placeholder="ukuran_lebar" value="{{old('ukuran_lebar', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->ukuran_lebar : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_tinggi') ? 'is-invalid' : ''}}" id="ukuran_tinggi" name="ukuran_tinggi" placeholder="ukuran_tinggi" value="{{old('ukuran_tinggi', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->ukuran_tinggi : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('cara_perolehan') ? 'is-invalid' : ''}}" id="cara_perolehan" name="cara_perolehan" placeholder="cara_perolehan" value="{{old('cara_perolehan', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->cara_perolehan : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('tempat_perolehan') ? 'is-invalid' : ''}}" id="tempat_perolehan" name="tempat_perolehan" placeholder="tempat_perolehan" value="{{old('tempat_perolehan', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->tempat_perolehan : null)) }}">
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
                                                <option {{old('lokasi_penempatan', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->lokasi_penempatan : null)) == 'Storage' ? 'selected=""' : '' }} value="Storage">Storage</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->lokasi_penempatan : null)) == 'Pameran Tetap' ? 'selected=""' : '' }} value="Pameran Tetap">Pameran Tetap</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->lokasi_penempatan : null)) == 'Rumoh Aceh' ? 'selected=""' : '' }} value="Rumoh Aceh">Rumoh Aceh</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->lokasi_penempatan : null)) == 'Ruang Prekon' ? 'selected=""' : '' }} value="Ruang Prekon">Ruang Prekon</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->lokasi_penempatan : null)) == 'Lemari Arsip' ? 'selected=""' : '' }} value="Lemari Arsip">Lemari Arsip</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->lokasi_penempatan : null)) == 'Gedung Edukasi' ? 'selected=""' : '' }} value="Gedung Edukasi">Gedung Edukasi</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->lokasi_penempatan : null)) == 'Ruang Pustaka' ? 'selected=""' : '' }} value="Ruang Pustaka">Ruang Pustaka</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->lokasi_penempatan : null)) == 'Dipinjamkan' ? 'selected=""' : '' }} value="Dipinjamkan">Dipinjamkan</option>

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
                                            <textarea rows="6" class="form-control {{$errors->has('keterangan_penempatan') ? 'is-invalid' : ''}}" id="keterangan_penempatan" name="keterangan_penempatan" placeholder="keterangan_penempatan">{{old('keterangan_penempatan', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->keterangan_penempatan : null)) }}</textarea>
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
                                            <input type="text" class="form-control {{$errors->has('nama_pencatat') ? 'is-invalid' : ''}}" id="nama_pencatat" name="nama_pencatat" placeholder="nama_pencatat" value="{{old('nama_pencatat', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->nama_pencatat : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('asal_usul') ? 'is-invalid' : ''}}" id="asal_usul" name="asal_usul" placeholder="asal_usul" value="{{old('asal_usul', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->asal_usul : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('kode_aset') ? 'is-invalid' : ''}}" id="kode_aset" name="kode_aset" placeholder="kode_aset" value="{{old('kode_aset', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->kode_aset : null)) }}">
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
                                            <textarea rows="6" class="form-control {{$errors->has('deskripsi_singkat') ? 'is-invalid' : ''}}" id="deskripsi_singkat" name="deskripsi_singkat" placeholder="deskripsi_singkat">{{old('deskripsi_singkat', (isset($collection_seni_rupa) ? $collection_seni_rupa->collection->deskripsi_singkat : null)) }}</textarea>
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
                                                <input type="checkbox" class="custom-control-input" id="published" name="published" value="1" {{old('published', (isset($collection_seni_rupa) ? ($collection_seni_rupa->collection->published ? 'checked=""' : '') : 'checked=""')) }}>
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


                                    
                                    

                                    <div class="form-group row"> <label for="pelukis" class="col-sm-4 col-form-label">pelukis</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('pelukis') ? 'is-invalid' : ''}}" id="pelukis" name="pelukis" placeholder="pelukis" value="{{old('pelukis', (isset($collection_arkeolgika->pelukis) ? $collection_arkeolgika->pelukis : null)) }}"> @if($errors->has('pelukis')) <div class="invalid-feedback"> {{$errors->first('pelukis')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="tahun_lukisan" class="col-sm-4 col-form-label">tahun_lukisan</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('tahun_lukisan') ? 'is-invalid' : ''}}" id="tahun_lukisan" name="tahun_lukisan" placeholder="tahun_lukisan" value="{{old('tahun_lukisan', (isset($collection_arkeolgika->tahun_lukisan) ? $collection_arkeolgika->tahun_lukisan : null)) }}"> @if($errors->has('tahun_lukisan')) <div class="invalid-feedback"> {{$errors->first('tahun_lukisan')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="lokasi_pembuatan" class="col-sm-4 col-form-label">lokasi_pembuatan</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('lokasi_pembuatan') ? 'is-invalid' : ''}}" id="lokasi_pembuatan" name="lokasi_pembuatan" placeholder="lokasi_pembuatan" value="{{old('lokasi_pembuatan', (isset($collection_arkeolgika->lokasi_pembuatan) ? $collection_arkeolgika->lokasi_pembuatan : null)) }}"> @if($errors->has('lokasi_pembuatan')) <div class="invalid-feedback"> {{$errors->first('lokasi_pembuatan')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="gaya_lukisan" class="col-sm-4 col-form-label">gaya_lukisan</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('gaya_lukisan') ? 'is-invalid' : ''}}" id="gaya_lukisan" name="gaya_lukisan" placeholder="gaya_lukisan" value="{{old('gaya_lukisan', (isset($collection_arkeolgika->gaya_lukisan) ? $collection_arkeolgika->gaya_lukisan : null)) }}"> @if($errors->has('gaya_lukisan')) <div class="invalid-feedback"> {{$errors->first('gaya_lukisan')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="bahan_alas" class="col-sm-4 col-form-label">bahan_alas</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('bahan_alas') ? 'is-invalid' : ''}}" id="bahan_alas" name="bahan_alas" placeholder="bahan_alas" value="{{old('bahan_alas', (isset($collection_arkeolgika->bahan_alas) ? $collection_arkeolgika->bahan_alas : null)) }}"> @if($errors->has('bahan_alas')) <div class="invalid-feedback"> {{$errors->first('bahan_alas')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="bingkai" class="col-sm-4 col-form-label">bingkai</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('bingkai') ? 'is-invalid' : ''}}" id="bingkai" name="bingkai" placeholder="bingkai" value="{{old('bingkai', (isset($collection_arkeolgika->bingkai) ? $collection_arkeolgika->bingkai : null)) }}"> @if($errors->has('bingkai')) <div class="invalid-feedback"> {{$errors->first('bingkai')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="jenis_tinta" class="col-sm-4 col-form-label">jenis_tinta</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('jenis_tinta') ? 'is-invalid' : ''}}" id="jenis_tinta" name="jenis_tinta" placeholder="jenis_tinta" value="{{old('jenis_tinta', (isset($collection_arkeolgika->jenis_tinta) ? $collection_arkeolgika->jenis_tinta : null)) }}"> @if($errors->has('jenis_tinta')) <div class="invalid-feedback"> {{$errors->first('jenis_tinta')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="warna_lukisan" class="col-sm-4 col-form-label">warna_lukisan</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('warna_lukisan') ? 'is-invalid' : ''}}" id="warna_lukisan" name="warna_lukisan" placeholder="warna_lukisan" value="{{old('warna_lukisan', (isset($collection_arkeolgika->warna_lukisan) ? $collection_arkeolgika->warna_lukisan : null)) }}"> @if($errors->has('warna_lukisan')) <div class="invalid-feedback"> {{$errors->first('warna_lukisan')}} </div> @endif </div> </div>
                                    
                                    
                                    
                                    


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

