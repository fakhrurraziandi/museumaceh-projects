@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">Koleksi - Filologika</div>
                    <div class="card-body">
                        
                        
                        @if(isset($collection_filologika))
                            <form action="{{ route('app.collection_filologika.update', $collection_filologika->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('app.collection_filologika.store')}}" method="POST" enctype="multipart/form-data">
                        @endif

                            @csrf

                            @isset($collection_filologika)
                                @method('PUT')
                            @endisset

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-4 col-form-label">nama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama" placeholder="nama" value="{{old('nama', (isset($collection_filologika) ? $collection_filologika->collection->nama : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('nomor_inventaris') ? 'is-invalid' : ''}}" id="nomor_inventaris" name="nomor_inventaris" placeholder="nomor_inventaris" value="{{old('nomor_inventaris', (isset($collection_filologika) ? $collection_filologika->collection->nomor_inventaris : null)) }}">
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
                                            <input type="date" class="form-control {{$errors->has('tanggal_inventaris') ? 'is-invalid' : ''}}" id="tanggal_inventaris" name="tanggal_inventaris" placeholder="tanggal_inventaris" value="{{old('tanggal_inventaris', (isset($collection_filologika) ? $collection_filologika->collection->tanggal_inventaris : null)) }}">
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
                                            <input type="date" class="form-control {{$errors->has('tanggal_pengadaan') ? 'is-invalid' : ''}}" id="tanggal_pengadaan" name="tanggal_pengadaan" placeholder="tanggal_pengadaan" value="{{old('tanggal_pengadaan', (isset($collection_filologika) ? $collection_filologika->collection->tanggal_pengadaan : null)) }}">
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
                                                <option {{old('kondisi', (isset($collection_filologika) ? $collection_filologika->collection->kondisi : null)) == 'Baik' ? 'selected=""' : '' }}  value="Baik">Baik</option>
                                                <option {{old('kondisi', (isset($collection_filologika) ? $collection_filologika->collection->kondisi : null)) == 'Rusak Ringan' ? 'selected=""' : '' }}  value="Rusak Ringan">Rusak Ringan</option>
                                                <option {{old('kondisi', (isset($collection_filologika) ? $collection_filologika->collection->kondisi : null)) == 'Rusak Berat' ? 'selected=""' : '' }}  value="Rusak Berat">Rusak Berat</option>
                                                <option {{old('kondisi', (isset($collection_filologika) ? $collection_filologika->collection->kondisi : null)) == 'Hilang' ? 'selected=""' : '' }}  value="Hilang">Hilang</option>
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_berat') ? 'is-invalid' : ''}}" id="ukuran_berat" name="ukuran_berat" placeholder="ukuran_berat" value="{{old('ukuran_berat', (isset($collection_filologika) ? $collection_filologika->collection->ukuran_berat : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_panjang') ? 'is-invalid' : ''}}" id="ukuran_panjang" name="ukuran_panjang" placeholder="ukuran_panjang" value="{{old('ukuran_panjang', (isset($collection_filologika) ? $collection_filologika->collection->ukuran_panjang : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_lebar') ? 'is-invalid' : ''}}" id="ukuran_lebar" name="ukuran_lebar" placeholder="ukuran_lebar" value="{{old('ukuran_lebar', (isset($collection_filologika) ? $collection_filologika->collection->ukuran_lebar : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_tinggi') ? 'is-invalid' : ''}}" id="ukuran_tinggi" name="ukuran_tinggi" placeholder="ukuran_tinggi" value="{{old('ukuran_tinggi', (isset($collection_filologika) ? $collection_filologika->collection->ukuran_tinggi : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('cara_perolehan') ? 'is-invalid' : ''}}" id="cara_perolehan" name="cara_perolehan" placeholder="cara_perolehan" value="{{old('cara_perolehan', (isset($collection_filologika) ? $collection_filologika->collection->cara_perolehan : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('tempat_perolehan') ? 'is-invalid' : ''}}" id="tempat_perolehan" name="tempat_perolehan" placeholder="tempat_perolehan" value="{{old('tempat_perolehan', (isset($collection_filologika) ? $collection_filologika->collection->tempat_perolehan : null)) }}">
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
                                                <option {{old('lokasi_penempatan', (isset($collection_filologika) ? $collection_filologika->collection->lokasi_penempatan : null)) == 'Storage' ? 'selected=""' : '' }} value="Storage">Storage</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_filologika) ? $collection_filologika->collection->lokasi_penempatan : null)) == 'Pameran Tetap' ? 'selected=""' : '' }} value="Pameran Tetap">Pameran Tetap</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_filologika) ? $collection_filologika->collection->lokasi_penempatan : null)) == 'Rumoh Aceh' ? 'selected=""' : '' }} value="Rumoh Aceh">Rumoh Aceh</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_filologika) ? $collection_filologika->collection->lokasi_penempatan : null)) == 'Ruang Prekon' ? 'selected=""' : '' }} value="Ruang Prekon">Ruang Prekon</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_filologika) ? $collection_filologika->collection->lokasi_penempatan : null)) == 'Lemari Arsip' ? 'selected=""' : '' }} value="Lemari Arsip">Lemari Arsip</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_filologika) ? $collection_filologika->collection->lokasi_penempatan : null)) == 'Gedung Edukasi' ? 'selected=""' : '' }} value="Gedung Edukasi">Gedung Edukasi</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_filologika) ? $collection_filologika->collection->lokasi_penempatan : null)) == 'Ruang Pustaka' ? 'selected=""' : '' }} value="Ruang Pustaka">Ruang Pustaka</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_filologika) ? $collection_filologika->collection->lokasi_penempatan : null)) == 'Dipinjamkan' ? 'selected=""' : '' }} value="Dipinjamkan">Dipinjamkan</option>

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
                                            <textarea rows="6" class="form-control {{$errors->has('keterangan_penempatan') ? 'is-invalid' : ''}}" id="keterangan_penempatan" name="keterangan_penempatan" placeholder="keterangan_penempatan">{{old('keterangan_penempatan', (isset($collection_filologika) ? $collection_filologika->collection->keterangan_penempatan : null)) }}</textarea>
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
                                            <input type="text" class="form-control {{$errors->has('nama_pencatat') ? 'is-invalid' : ''}}" id="nama_pencatat" name="nama_pencatat" placeholder="nama_pencatat" value="{{old('nama_pencatat', (isset($collection_filologika) ? $collection_filologika->collection->nama_pencatat : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('asal_usul') ? 'is-invalid' : ''}}" id="asal_usul" name="asal_usul" placeholder="asal_usul" value="{{old('asal_usul', (isset($collection_filologika) ? $collection_filologika->collection->asal_usul : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('kode_aset') ? 'is-invalid' : ''}}" id="kode_aset" name="kode_aset" placeholder="kode_aset" value="{{old('kode_aset', (isset($collection_filologika) ? $collection_filologika->collection->kode_aset : null)) }}">
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
                                            <textarea rows="6" class="form-control {{$errors->has('deskripsi_singkat') ? 'is-invalid' : ''}}" id="deskripsi_singkat" name="deskripsi_singkat" placeholder="deskripsi_singkat">{{old('deskripsi_singkat', (isset($collection_filologika) ? $collection_filologika->collection->deskripsi_singkat : null)) }}</textarea>
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
                                                <input type="checkbox" class="custom-control-input" id="published" name="published" value="1" {{old('published', (isset($collection_filologika) ? ($collection_filologika->collection->published ? 'checked=""' : '') : 'checked=""')) }}>
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


                                    
                                    
                                    


                                    <div class="form-group row"> <label for="sub_judul" class="col-sm-4 col-form-label">sub_judul</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('sub_judul') ? 'is-invalid' : ''}}" id="sub_judul" name="sub_judul" placeholder="sub_judul" value="{{old('sub_judul', (isset($collection_arkeolgika->sub_judul) ? $collection_arkeolgika->sub_judul : null)) }}"> @if($errors->has('sub_judul')) <div class="invalid-feedback"> {{$errors->first('sub_judul')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="pengarang" class="col-sm-4 col-form-label">pengarang</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('pengarang') ? 'is-invalid' : ''}}" id="pengarang" name="pengarang" placeholder="pengarang" value="{{old('pengarang', (isset($collection_arkeolgika->pengarang) ? $collection_arkeolgika->pengarang : null)) }}"> @if($errors->has('pengarang')) <div class="invalid-feedback"> {{$errors->first('pengarang')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="penyalin" class="col-sm-4 col-form-label">penyalin</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('penyalin') ? 'is-invalid' : ''}}" id="penyalin" name="penyalin" placeholder="penyalin" value="{{old('penyalin', (isset($collection_arkeolgika->penyalin) ? $collection_arkeolgika->penyalin : null)) }}"> @if($errors->has('penyalin')) <div class="invalid-feedback"> {{$errors->first('penyalin')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="tempat_penulisan" class="col-sm-4 col-form-label">tempat_penulisan</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('tempat_penulisan') ? 'is-invalid' : ''}}" id="tempat_penulisan" name="tempat_penulisan" placeholder="tempat_penulisan" value="{{old('tempat_penulisan', (isset($collection_arkeolgika->tempat_penulisan) ? $collection_arkeolgika->tempat_penulisan : null)) }}"> @if($errors->has('tempat_penulisan')) <div class="invalid-feedback"> {{$errors->first('tempat_penulisan')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="tahun_penulisan" class="col-sm-4 col-form-label">tahun_penulisan</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('tahun_penulisan') ? 'is-invalid' : ''}}" id="tahun_penulisan" name="tahun_penulisan" placeholder="tahun_penulisan" value="{{old('tahun_penulisan', (isset($collection_arkeolgika->tahun_penulisan) ? $collection_arkeolgika->tahun_penulisan : null)) }}"> @if($errors->has('tahun_penulisan')) <div class="invalid-feedback"> {{$errors->first('tahun_penulisan')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="tahun_penyalinan" class="col-sm-4 col-form-label">tahun_penyalinan</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('tahun_penyalinan') ? 'is-invalid' : ''}}" id="tahun_penyalinan" name="tahun_penyalinan" placeholder="tahun_penyalinan" value="{{old('tahun_penyalinan', (isset($collection_arkeolgika->tahun_penyalinan) ? $collection_arkeolgika->tahun_penyalinan : null)) }}"> @if($errors->has('tahun_penyalinan')) <div class="invalid-feedback"> {{$errors->first('tahun_penyalinan')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="bahasa_dan_aksara" class="col-sm-4 col-form-label">bahasa_dan_aksara</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('bahasa_dan_aksara') ? 'is-invalid' : ''}}" id="bahasa_dan_aksara" name="bahasa_dan_aksara" placeholder="bahasa_dan_aksara" value="{{old('bahasa_dan_aksara', (isset($collection_arkeolgika->bahasa_dan_aksara) ? $collection_arkeolgika->bahasa_dan_aksara : null)) }}"> @if($errors->has('bahasa_dan_aksara')) <div class="invalid-feedback"> {{$errors->first('bahasa_dan_aksara')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="bentuk_teks" class="col-sm-4 col-form-label">bentuk_teks</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('bentuk_teks') ? 'is-invalid' : ''}}" id="bentuk_teks" name="bentuk_teks" placeholder="bentuk_teks" value="{{old('bentuk_teks', (isset($collection_arkeolgika->bentuk_teks) ? $collection_arkeolgika->bentuk_teks : null)) }}"> @if($errors->has('bentuk_teks')) <div class="invalid-feedback"> {{$errors->first('bentuk_teks')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="jenis_tulisan" class="col-sm-4 col-form-label">jenis_tulisan</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('jenis_tulisan') ? 'is-invalid' : ''}}" id="jenis_tulisan" name="jenis_tulisan" placeholder="jenis_tulisan" value="{{old('jenis_tulisan', (isset($collection_arkeolgika->jenis_tulisan) ? $collection_arkeolgika->jenis_tulisan : null)) }}"> @if($errors->has('jenis_tulisan')) <div class="invalid-feedback"> {{$errors->first('jenis_tulisan')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="bahan_alas_naskah" class="col-sm-4 col-form-label">bahan_alas_naskah</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('bahan_alas_naskah') ? 'is-invalid' : ''}}" id="bahan_alas_naskah" name="bahan_alas_naskah" placeholder="bahan_alas_naskah" value="{{old('bahan_alas_naskah', (isset($collection_arkeolgika->bahan_alas_naskah) ? $collection_arkeolgika->bahan_alas_naskah : null)) }}"> @if($errors->has('bahan_alas_naskah')) <div class="invalid-feedback"> {{$errors->first('bahan_alas_naskah')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="bahan_sampul" class="col-sm-4 col-form-label">bahan_sampul</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('bahan_sampul') ? 'is-invalid' : ''}}" id="bahan_sampul" name="bahan_sampul" placeholder="bahan_sampul" value="{{old('bahan_sampul', (isset($collection_arkeolgika->bahan_sampul) ? $collection_arkeolgika->bahan_sampul : null)) }}"> @if($errors->has('bahan_sampul')) <div class="invalid-feedback"> {{$errors->first('bahan_sampul')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="jenis_penjilidan" class="col-sm-4 col-form-label">jenis_penjilidan</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('jenis_penjilidan') ? 'is-invalid' : ''}}" id="jenis_penjilidan" name="jenis_penjilidan" placeholder="jenis_penjilidan" value="{{old('jenis_penjilidan', (isset($collection_arkeolgika->jenis_penjilidan) ? $collection_arkeolgika->jenis_penjilidan : null)) }}"> @if($errors->has('jenis_penjilidan')) <div class="invalid-feedback"> {{$errors->first('jenis_penjilidan')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="jumlah_halaman" class="col-sm-4 col-form-label">jumlah_halaman</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('jumlah_halaman') ? 'is-invalid' : ''}}" id="jumlah_halaman" name="jumlah_halaman" placeholder="jumlah_halaman" value="{{old('jumlah_halaman', (isset($collection_arkeolgika->jumlah_halaman) ? $collection_arkeolgika->jumlah_halaman : null)) }}"> @if($errors->has('jumlah_halaman')) <div class="invalid-feedback"> {{$errors->first('jumlah_halaman')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="jumlah_baris_halaman" class="col-sm-4 col-form-label">jumlah_baris_halaman</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('jumlah_baris_halaman') ? 'is-invalid' : ''}}" id="jumlah_baris_halaman" name="jumlah_baris_halaman" placeholder="jumlah_baris_halaman" value="{{old('jumlah_baris_halaman', (isset($collection_arkeolgika->jumlah_baris_halaman) ? $collection_arkeolgika->jumlah_baris_halaman : null)) }}"> @if($errors->has('jumlah_baris_halaman')) <div class="invalid-feedback"> {{$errors->first('jumlah_baris_halaman')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="illustrasi" class="col-sm-4 col-form-label">illustrasi</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('illustrasi') ? 'is-invalid' : ''}}" id="illustrasi" name="illustrasi" placeholder="illustrasi" value="{{old('illustrasi', (isset($collection_arkeolgika->illustrasi) ? $collection_arkeolgika->illustrasi : null)) }}"> @if($errors->has('illustrasi')) <div class="invalid-feedback"> {{$errors->first('illustrasi')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="jenis_tinta" class="col-sm-4 col-form-label">jenis_tinta</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('jenis_tinta') ? 'is-invalid' : ''}}" id="jenis_tinta" name="jenis_tinta" placeholder="jenis_tinta" value="{{old('jenis_tinta', (isset($collection_arkeolgika->jenis_tinta) ? $collection_arkeolgika->jenis_tinta : null)) }}"> @if($errors->has('jenis_tinta')) <div class="invalid-feedback"> {{$errors->first('jenis_tinta')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="warna_tinta" class="col-sm-4 col-form-label">warna_tinta</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('warna_tinta') ? 'is-invalid' : ''}}" id="warna_tinta" name="warna_tinta" placeholder="warna_tinta" value="{{old('warna_tinta', (isset($collection_arkeolgika->warna_tinta) ? $collection_arkeolgika->warna_tinta : null)) }}"> @if($errors->has('warna_tinta')) <div class="invalid-feedback"> {{$errors->first('warna_tinta')}} </div> @endif </div> </div>
                                    <div class="form-group row"> <label for="watermark" class="col-sm-4 col-form-label">watermark</label> <div class="col-sm-8"> <input type="text" class="form-control {{$errors->has('watermark') ? 'is-invalid' : ''}}" id="watermark" name="watermark" placeholder="watermark" value="{{old('watermark', (isset($collection_arkeolgika->watermark) ? $collection_arkeolgika->watermark : null)) }}"> @if($errors->has('watermark')) <div class="invalid-feedback"> {{$errors->first('watermark')}} </div> @endif </div> </div>
                                    
                                    
                                    
                                    
                                 
                                    
                                    


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

