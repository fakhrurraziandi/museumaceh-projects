@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">Koleksi - Etnografika</div>
                    <div class="card-body">
                        
                        
                        @if(isset($collection_etnografika))
                            <form action="{{ route('app.collection_etnografika.update', $collection_etnografika->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('app.collection_etnografika.store')}}" method="POST" enctype="multipart/form-data">
                        @endif

                            @csrf

                            @isset($collection_etnografika)
                                @method('PUT')
                            @endisset

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-4 col-form-label">nama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama" placeholder="nama" value="{{old('nama', (isset($collection_etnografika) ? $collection_etnografika->collection->nama : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('nomor_inventaris') ? 'is-invalid' : ''}}" id="nomor_inventaris" name="nomor_inventaris" placeholder="nomor_inventaris" value="{{old('nomor_inventaris', (isset($collection_etnografika) ? $collection_etnografika->collection->nomor_inventaris : null)) }}">
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
                                            <input type="date" class="form-control {{$errors->has('tanggal_inventaris') ? 'is-invalid' : ''}}" id="tanggal_inventaris" name="tanggal_inventaris" placeholder="tanggal_inventaris" value="{{old('tanggal_inventaris', (isset($collection_etnografika) ? $collection_etnografika->collection->tanggal_inventaris : null)) }}">
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
                                            <input type="date" class="form-control {{$errors->has('tanggal_pengadaan') ? 'is-invalid' : ''}}" id="tanggal_pengadaan" name="tanggal_pengadaan" placeholder="tanggal_pengadaan" value="{{old('tanggal_pengadaan', (isset($collection_etnografika) ? $collection_etnografika->collection->tanggal_pengadaan : null)) }}">
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
                                                <option {{old('kondisi', (isset($collection_etnografika) ? $collection_etnografika->collection->kondisi : null)) == 'Baik' ? 'selected=""' : '' }}  value="Baik">Baik</option>
                                                <option {{old('kondisi', (isset($collection_etnografika) ? $collection_etnografika->collection->kondisi : null)) == 'Rusak Ringan' ? 'selected=""' : '' }}  value="Rusak Ringan">Rusak Ringan</option>
                                                <option {{old('kondisi', (isset($collection_etnografika) ? $collection_etnografika->collection->kondisi : null)) == 'Rusak Berat' ? 'selected=""' : '' }}  value="Rusak Berat">Rusak Berat</option>
                                                <option {{old('kondisi', (isset($collection_etnografika) ? $collection_etnografika->collection->kondisi : null)) == 'Hilang' ? 'selected=""' : '' }}  value="Hilang">Hilang</option>
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_berat') ? 'is-invalid' : ''}}" id="ukuran_berat" name="ukuran_berat" placeholder="ukuran_berat" value="{{old('ukuran_berat', (isset($collection_etnografika) ? $collection_etnografika->collection->ukuran_berat : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_panjang') ? 'is-invalid' : ''}}" id="ukuran_panjang" name="ukuran_panjang" placeholder="ukuran_panjang" value="{{old('ukuran_panjang', (isset($collection_etnografika) ? $collection_etnografika->collection->ukuran_panjang : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_lebar') ? 'is-invalid' : ''}}" id="ukuran_lebar" name="ukuran_lebar" placeholder="ukuran_lebar" value="{{old('ukuran_lebar', (isset($collection_etnografika) ? $collection_etnografika->collection->ukuran_lebar : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_tinggi') ? 'is-invalid' : ''}}" id="ukuran_tinggi" name="ukuran_tinggi" placeholder="ukuran_tinggi" value="{{old('ukuran_tinggi', (isset($collection_etnografika) ? $collection_etnografika->collection->ukuran_tinggi : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('cara_perolehan') ? 'is-invalid' : ''}}" id="cara_perolehan" name="cara_perolehan" placeholder="cara_perolehan" value="{{old('cara_perolehan', (isset($collection_etnografika) ? $collection_etnografika->collection->cara_perolehan : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('tempat_perolehan') ? 'is-invalid' : ''}}" id="tempat_perolehan" name="tempat_perolehan" placeholder="tempat_perolehan" value="{{old('tempat_perolehan', (isset($collection_etnografika) ? $collection_etnografika->collection->tempat_perolehan : null)) }}">
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
                                                <option {{old('lokasi_penempatan', (isset($collection_ernografika) ? $collection_ernografika->collection->lokasi_penempatan : null)) == 'Storage' ? 'selected=""' : '' }} value="Storage">Storage</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_ernografika) ? $collection_ernografika->collection->lokasi_penempatan : null)) == 'Pameran Tetap' ? 'selected=""' : '' }} value="Pameran Tetap">Pameran Tetap</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_ernografika) ? $collection_ernografika->collection->lokasi_penempatan : null)) == 'Rumoh Aceh' ? 'selected=""' : '' }} value="Rumoh Aceh">Rumoh Aceh</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_ernografika) ? $collection_ernografika->collection->lokasi_penempatan : null)) == 'Ruang Prekon' ? 'selected=""' : '' }} value="Ruang Prekon">Ruang Prekon</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_ernografika) ? $collection_ernografika->collection->lokasi_penempatan : null)) == 'Lemari Arsip' ? 'selected=""' : '' }} value="Lemari Arsip">Lemari Arsip</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_ernografika) ? $collection_ernografika->collection->lokasi_penempatan : null)) == 'Gedung Edukasi' ? 'selected=""' : '' }} value="Gedung Edukasi">Gedung Edukasi</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_ernografika) ? $collection_ernografika->collection->lokasi_penempatan : null)) == 'Ruang Pustaka' ? 'selected=""' : '' }} value="Ruang Pustaka">Ruang Pustaka</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_ernografika) ? $collection_ernografika->collection->lokasi_penempatan : null)) == 'Dipinjamkan' ? 'selected=""' : '' }} value="Dipinjamkan">Dipinjamkan</option>

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
                                            <textarea rows="6" class="form-control {{$errors->has('keterangan_penempatan') ? 'is-invalid' : ''}}" id="keterangan_penempatan" name="keterangan_penempatan" placeholder="keterangan_penempatan">{{old('keterangan_penempatan', (isset($collection_etnografika) ? $collection_etnografika->collection->keterangan_penempatan : null)) }}</textarea>
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
                                            <input type="text" class="form-control {{$errors->has('nama_pencatat') ? 'is-invalid' : ''}}" id="nama_pencatat" name="nama_pencatat" placeholder="nama_pencatat" value="{{old('nama_pencatat', (isset($collection_etnografika) ? $collection_etnografika->collection->nama_pencatat : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('asal_usul') ? 'is-invalid' : ''}}" id="asal_usul" name="asal_usul" placeholder="asal_usul" value="{{old('asal_usul', (isset($collection_etnografika) ? $collection_etnografika->collection->asal_usul : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('kode_aset') ? 'is-invalid' : ''}}" id="kode_aset" name="kode_aset" placeholder="kode_aset" value="{{old('kode_aset', (isset($collection_etnografika) ? $collection_etnografika->collection->kode_aset : null)) }}">
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
                                            <textarea rows="6" class="form-control {{$errors->has('deskripsi_singkat') ? 'is-invalid' : ''}}" id="deskripsi_singkat" name="deskripsi_singkat" placeholder="deskripsi_singkat">{{old('deskripsi_singkat', (isset($collection_etnografika) ? $collection_etnografika->collection->deskripsi_singkat : null)) }}</textarea>
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
                                                <input type="checkbox" class="custom-control-input" id="published" name="published" value="1" {{old('published', (isset($collection_etnografika) ? ($collection_etnografika->collection->published ? 'checked=""' : '') : 'checked=""')) }}>
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
                                        <label for="bahan_material" class="col-sm-4 col-form-label">bahan_material</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('bahan_material') ? 'is-inavlid' : ''}}" id="bahan_material" name="bahan_material" placeholder="bahan_material" value="{{old('bahan_material', (isset($collection_etnografika->bahan_material) ? $collection_etnografika->bahan_material : null)) }}">
                                            @if($errors->has('bahan_material'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('bahan_material')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="motif_corak" class="col-sm-4 col-form-label">motif_corak</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('motif_corak') ? 'is-inavlid' : ''}}" id="motif_corak" name="motif_corak" placeholder="motif_corak" value="{{old('motif_corak', (isset($collection_etnografika->motif_corak) ? $collection_etnografika->motif_corak : null)) }}">
                                            @if($errors->has('motif_corak'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('motif_corak')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="warna" class="col-sm-4 col-form-label">warna</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('warna') ? 'is-inavlid' : ''}}" id="warna" name="warna" placeholder="warna" value="{{old('warna', (isset($collection_etnografika->warna) ? $collection_etnografika->warna : null)) }}">
                                            @if($errors->has('warna'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('warna')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bahan_pewarna" class="col-sm-4 col-form-label">bahan_pewarna</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('bahan_pewarna') ? 'is-inavlid' : ''}}" id="bahan_pewarna" name="bahan_pewarna" placeholder="bahan_pewarna" value="{{old('bahan_pewarna', (isset($collection_etnografika->bahan_pewarna) ? $collection_etnografika->bahan_pewarna : null)) }}">
                                            @if($errors->has('bahan_pewarna'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('bahan_pewarna')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="teknik_pembuatan" class="col-sm-4 col-form-label">teknik_pembuatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('teknik_pembuatan') ? 'is-inavlid' : ''}}" id="teknik_pembuatan" name="teknik_pembuatan" placeholder="teknik_pembuatan" value="{{old('teknik_pembuatan', (isset($collection_etnografika->teknik_pembuatan) ? $collection_etnografika->teknik_pembuatan : null)) }}">
                                            @if($errors->has('teknik_pembuatan'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('teknik_pembuatan')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun_pembuatan" class="col-sm-4 col-form-label">tahun_pembuatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('tahun_pembuatan') ? 'is-inavlid' : ''}}" id="tahun_pembuatan" name="tahun_pembuatan" placeholder="tahun_pembuatan" value="{{old('tahun_pembuatan', (isset($collection_etnografika->tahun_pembuatan) ? $collection_etnografika->tahun_pembuatan : null)) }}">
                                            @if($errors->has('tahun_pembuatan'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('tahun_pembuatan')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tempat_pembuatan" class="col-sm-4 col-form-label">tempat_pembuatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('tempat_pembuatan') ? 'is-inavlid' : ''}}" id="tempat_pembuatan" name="tempat_pembuatan" placeholder="tempat_pembuatan" value="{{old('tempat_pembuatan', (isset($collection_etnografika->tempat_pembuatan) ? $collection_etnografika->tempat_pembuatan : null)) }}">
                                            @if($errors->has('tempat_pembuatan'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('tempat_pembuatan')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="watermark" class="col-sm-4 col-form-label">watermark</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('watermark') ? 'is-inavlid' : ''}}" id="watermark" name="watermark" placeholder="watermark" value="{{old('watermark', (isset($collection_etnografika->watermark) ? $collection_etnografika->watermark : null)) }}">
                                            @if($errors->has('watermark'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('watermark')}}
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

