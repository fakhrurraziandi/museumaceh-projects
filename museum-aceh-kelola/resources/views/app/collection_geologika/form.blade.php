@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">Koleksi - Geologika</div>
                    <div class="card-body">
                        
                        
                        @if(isset($collection_geologika))
                            <form action="{{ route('app.collection_geologika.update', $collection_geologika->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('app.collection_geologika.store')}}" method="POST" enctype="multipart/form-data">
                        @endif

                            @csrf

                            @isset($collection_geologika)
                                @method('PUT')
                            @endisset

                            <input type="hidden" name="collection_id" id="collection_id" value="{{$collection_geologika->collection->id}}">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-4 col-form-label">nama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama" placeholder="nama" value="{{old('nama', (isset($collection_geologika) ? $collection_geologika->collection->nama : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('nomor_inventaris') ? 'is-invalid' : ''}}" id="nomor_inventaris" name="nomor_inventaris" placeholder="nomor_inventaris" value="{{old('nomor_inventaris', (isset($collection_geologika) ? $collection_geologika->collection->nomor_inventaris : null)) }}">
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
                                            <input type="date" class="form-control {{$errors->has('tanggal_inventaris') ? 'is-invalid' : ''}}" id="tanggal_inventaris" name="tanggal_inventaris" placeholder="tanggal_inventaris" value="{{old('tanggal_inventaris', (isset($collection_geologika) ? $collection_geologika->collection->tanggal_inventaris : null)) }}">
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
                                            <input type="date" class="form-control {{$errors->has('tanggal_pengadaan') ? 'is-invalid' : ''}}" id="tanggal_pengadaan" name="tanggal_pengadaan" placeholder="tanggal_pengadaan" value="{{old('tanggal_pengadaan', (isset($collection_geologika) ? $collection_geologika->collection->tanggal_pengadaan : null)) }}">
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
                                                <option {{old('kondisi', (isset($collection_geologika) ? $collection_geologika->collection->kondisi : null)) == 'Baik' ? 'selected=""' : '' }}  value="Baik">Baik</option>
                                                <option {{old('kondisi', (isset($collection_geologika) ? $collection_geologika->collection->kondisi : null)) == 'Rusak Ringan' ? 'selected=""' : '' }}  value="Rusak Ringan">Rusak Ringan</option>
                                                <option {{old('kondisi', (isset($collection_geologika) ? $collection_geologika->collection->kondisi : null)) == 'Rusak Berat' ? 'selected=""' : '' }}  value="Rusak Berat">Rusak Berat</option>
                                                <option {{old('kondisi', (isset($collection_geologika) ? $collection_geologika->collection->kondisi : null)) == 'Hilang' ? 'selected=""' : '' }}  value="Hilang">Hilang</option>
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_berat') ? 'is-invalid' : ''}}" id="ukuran_berat" name="ukuran_berat" placeholder="ukuran_berat" value="{{old('ukuran_berat', (isset($collection_geologika) ? $collection_geologika->collection->ukuran_berat : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_panjang') ? 'is-invalid' : ''}}" id="ukuran_panjang" name="ukuran_panjang" placeholder="ukuran_panjang" value="{{old('ukuran_panjang', (isset($collection_geologika) ? $collection_geologika->collection->ukuran_panjang : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_lebar') ? 'is-invalid' : ''}}" id="ukuran_lebar" name="ukuran_lebar" placeholder="ukuran_lebar" value="{{old('ukuran_lebar', (isset($collection_geologika) ? $collection_geologika->collection->ukuran_lebar : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('ukuran_tinggi') ? 'is-invalid' : ''}}" id="ukuran_tinggi" name="ukuran_tinggi" placeholder="ukuran_tinggi" value="{{old('ukuran_tinggi', (isset($collection_geologika) ? $collection_geologika->collection->ukuran_tinggi : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('cara_perolehan') ? 'is-invalid' : ''}}" id="cara_perolehan" name="cara_perolehan" placeholder="cara_perolehan" value="{{old('cara_perolehan', (isset($collection_geologika) ? $collection_geologika->collection->cara_perolehan : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('tempat_perolehan') ? 'is-invalid' : ''}}" id="tempat_perolehan" name="tempat_perolehan" placeholder="tempat_perolehan" value="{{old('tempat_perolehan', (isset($collection_geologika) ? $collection_geologika->collection->tempat_perolehan : null)) }}">
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
                                                <option {{old('lokasi_penempatan', (isset($collection_geologika) ? $collection_geologika->collection->lokasi_penempatan : null)) == 'Storage' ? 'selected=""' : '' }} value="Storage">Storage</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_geologika) ? $collection_geologika->collection->lokasi_penempatan : null)) == 'Pameran Tetap' ? 'selected=""' : '' }} value="Pameran Tetap">Pameran Tetap</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_geologika) ? $collection_geologika->collection->lokasi_penempatan : null)) == 'Rumoh Aceh' ? 'selected=""' : '' }} value="Rumoh Aceh">Rumoh Aceh</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_geologika) ? $collection_geologika->collection->lokasi_penempatan : null)) == 'Ruang Prekon' ? 'selected=""' : '' }} value="Ruang Prekon">Ruang Prekon</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_geologika) ? $collection_geologika->collection->lokasi_penempatan : null)) == 'Lemari Arsip' ? 'selected=""' : '' }} value="Lemari Arsip">Lemari Arsip</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_geologika) ? $collection_geologika->collection->lokasi_penempatan : null)) == 'Gedung Edukasi' ? 'selected=""' : '' }} value="Gedung Edukasi">Gedung Edukasi</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_geologika) ? $collection_geologika->collection->lokasi_penempatan : null)) == 'Ruang Pustaka' ? 'selected=""' : '' }} value="Ruang Pustaka">Ruang Pustaka</option>
                                                <option {{old('lokasi_penempatan', (isset($collection_geologika) ? $collection_geologika->collection->lokasi_penempatan : null)) == 'Dipinjamkan' ? 'selected=""' : '' }} value="Dipinjamkan">Dipinjamkan</option>

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
                                            <textarea rows="6" class="form-control {{$errors->has('keterangan_penempatan') ? 'is-invalid' : ''}}" id="keterangan_penempatan" name="keterangan_penempatan" placeholder="keterangan_penempatan">{{old('keterangan_penempatan', (isset($collection_geologika) ? $collection_geologika->collection->keterangan_penempatan : null)) }}</textarea>
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
                                            <input type="text" class="form-control {{$errors->has('nama_pencatat') ? 'is-invalid' : ''}}" id="nama_pencatat" name="nama_pencatat" placeholder="nama_pencatat" value="{{old('nama_pencatat', (isset($collection_geologika) ? $collection_geologika->collection->nama_pencatat : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('asal_usul') ? 'is-invalid' : ''}}" id="asal_usul" name="asal_usul" placeholder="asal_usul" value="{{old('asal_usul', (isset($collection_geologika) ? $collection_geologika->collection->asal_usul : null)) }}">
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
                                            <input type="text" class="form-control {{$errors->has('kode_aset') ? 'is-invalid' : ''}}" id="kode_aset" name="kode_aset" placeholder="kode_aset" value="{{old('kode_aset', (isset($collection_geologika) ? $collection_geologika->collection->kode_aset : null)) }}">
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
                                            <textarea rows="6" class="form-control {{$errors->has('deskripsi_singkat') ? 'is-invalid' : ''}}" id="deskripsi_singkat" name="deskripsi_singkat" placeholder="deskripsi_singkat">{{old('deskripsi_singkat', (isset($collection_geologika) ? $collection_geologika->collection->deskripsi_singkat : null)) }}</textarea>
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
                                                <input type="checkbox" class="custom-control-input" id="published" name="published" value="1" {{old('published', (isset($collection_geologika) ? ($collection_geologika->collection->published ? 'checked=""' : '') : 'checked=""')) }}>
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
                                        <label for="mineral_utama" class="col-sm-4 col-form-label">mineral_utama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('mineral_utama') ? 'is-invalid' : ''}}" id="mineral_utama" name="mineral_utama" placeholder="mineral_utama" value="{{old('mineral_utama', (isset($collection_geologika->mineral_utama) ? $collection_geologika->mineral_utama : null)) }}">
                                            @if($errors->has('mineral_utama'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('mineral_utama')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="mineral_sekunder" class="col-sm-4 col-form-label">mineral_sekunder</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('mineral_sekunder') ? 'is-invalid' : ''}}" id="mineral_sekunder" name="mineral_sekunder" placeholder="mineral_sekunder" value="{{old('mineral_sekunder', (isset($collection_geologika->mineral_sekunder) ? $collection_geologika->mineral_sekunder : null)) }}">
                                            @if($errors->has('mineral_sekunder'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('mineral_sekunder')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="senyawa_kimia" class="col-sm-4 col-form-label">senyawa_kimia</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('senyawa_kimia') ? 'is-invalid' : ''}}" id="senyawa_kimia" name="senyawa_kimia" placeholder="senyawa_kimia" value="{{old('senyawa_kimia', (isset($collection_geologika->senyawa_kimia) ? $collection_geologika->senyawa_kimia : null)) }}">
                                            @if($errors->has('senyawa_kimia'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('senyawa_kimia')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jenis" class="col-sm-4 col-form-label">jenis</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('jenis') ? 'is-invalid' : ''}}" id="jenis" name="jenis" placeholder="jenis" value="{{old('jenis', (isset($collection_geologika->jenis) ? $collection_geologika->jenis : null)) }}">
                                            @if($errors->has('jenis'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('jenis')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tekstur" class="col-sm-4 col-form-label">tekstur</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('tekstur') ? 'is-invalid' : ''}}" id="tekstur" name="tekstur" placeholder="tekstur" value="{{old('tekstur', (isset($collection_geologika->tekstur) ? $collection_geologika->tekstur : null)) }}">
                                            @if($errors->has('tekstur'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('tekstur')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="struktur" class="col-sm-4 col-form-label">struktur</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('struktur') ? 'is-invalid' : ''}}" id="struktur" name="struktur" placeholder="struktur" value="{{old('struktur', (isset($collection_geologika->struktur) ? $collection_geologika->struktur : null)) }}">
                                            @if($errors->has('struktur'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('struktur')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="proses_pembentukan" class="col-sm-4 col-form-label">proses_pembentukan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('proses_pembentukan') ? 'is-invalid' : ''}}" id="proses_pembentukan" name="proses_pembentukan" placeholder="proses_pembentukan" value="{{old('proses_pembentukan', (isset($collection_geologika->proses_pembentukan) ? $collection_geologika->proses_pembentukan : null)) }}">
                                            @if($errors->has('proses_pembentukan'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('proses_pembentukan')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="warna" class="col-sm-4 col-form-label">warna</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('warna') ? 'is-invalid' : ''}}" id="warna" name="warna" placeholder="warna" value="{{old('warna', (isset($collection_geologika->warna) ? $collection_geologika->warna : null)) }}">
                                            @if($errors->has('warna'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('warna')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="karat" class="col-sm-4 col-form-label">karat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control {{$errors->has('karat') ? 'is-invalid' : ''}}" id="karat" name="karat" placeholder="karat" value="{{old('karat', (isset($collection_geologika->karat) ? $collection_geologika->karat : null)) }}">
                                            @if($errors->has('karat'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('karat')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <hr>
                                            <h5>Arsip Digital</h5>
                                        </div>
                                    </div>

                                    <div class="koleksi-digital-form-wrapper">

                                        <div class="form-group row">
                                            <label for="digital_collection_file_1" class="col-sm-4 col-form-label">Upload File <br><i>(jpg,jpeg,bmp,png,doc,docx,pdf)</i></label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control {{$errors->has('digital_collection_file_1') ? 'is-invalid' : ''}}" id="digital_collection_file_1" name="digital_collection_file_1" placeholder="digital_collection_file_1" value="{{old('digital_collection_file_1', (isset($collection_geologika->digital_collection_file_1) ? $collection_geologika->digital_collection_file_1 : null)) }}">
                                                @if($errors->has('digital_collection_file_1'))
                                                    <div class="invalid-feedback">
                                                        {{$errors->first('digital_collection_file_1')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        

                                        <div class="form-group row">
                                            {{-- <label for="digital_collection_file_2" class="col-sm-4 col-form-label">digital_collection_file_2</label> --}}
                                            <div class="col-sm-8 offset-sm-4">
                                                <input type="file" class="form-control {{$errors->has('digital_collection_file_2') ? 'is-invalid' : ''}}" id="digital_collection_file_2" name="digital_collection_file_2" placeholder="digital_collection_file_2" value="{{old('digital_collection_file_2', (isset($collection_geologika->digital_collection_file_2) ? $collection_geologika->digital_collection_file_2 : null)) }}">
                                                @if($errors->has('digital_collection_file_2'))
                                                    <div class="invalid-feedback">
                                                        {{$errors->first('digital_collection_file_2')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {{-- <label for="digital_collection_file_3" class="col-sm-4 col-form-label">digital_collection_file_3</label> --}}
                                            <div class="col-sm-8 offset-sm-4">
                                                <input type="file" class="form-control {{$errors->has('digital_collection_file_3') ? 'is-invalid' : ''}}" id="digital_collection_file_3" name="digital_collection_file_3" placeholder="digital_collection_file_3" value="{{old('digital_collection_file_3', (isset($collection_geologika->digital_collection_file_3) ? $collection_geologika->digital_collection_file_3 : null)) }}">
                                                @if($errors->has('digital_collection_file_3'))
                                                    <div class="invalid-feedback">
                                                        {{$errors->first('digital_collection_file_3')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {{-- <label for="digital_collection_file_4" class="col-sm-4 col-form-label">digital_collection_file_4</label> --}}
                                            <div class="col-sm-8 offset-sm-4">
                                                <input type="file" class="form-control {{$errors->has('digital_collection_file_4') ? 'is-invalid' : ''}}" id="digital_collection_file_4" name="digital_collection_file_4" placeholder="digital_collection_file_4" value="{{old('digital_collection_file_4', (isset($collection_geologika->digital_collection_file_4) ? $collection_geologika->digital_collection_file_4 : null)) }}">
                                                @if($errors->has('digital_collection_file_4'))
                                                    <div class="invalid-feedback">
                                                        {{$errors->first('digital_collection_file_4')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {{-- <label for="digital_collection_file_5" class="col-sm-4 col-form-label">digital_collection_file_5</label> --}}
                                            <div class="col-sm-8 offset-sm-4">
                                                <input type="file" class="form-control {{$errors->has('digital_collection_file_5') ? 'is-invalid' : ''}}" id="digital_collection_file_5" name="digital_collection_file_5" placeholder="digital_collection_file_5" value="{{old('digital_collection_file_5', (isset($collection_geologika->digital_collection_file_5) ? $collection_geologika->digital_collection_file_5 : null)) }}">
                                                @if($errors->has('digital_collection_file_5'))
                                                    <div class="invalid-feedback">
                                                        {{$errors->first('digital_collection_file_5')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {{-- <label for="digital_collection_file_6" class="col-sm-4 col-form-label">digital_collection_file_6</label> --}}
                                            <div class="col-sm-8 offset-sm-4">
                                                <input type="file" class="form-control {{$errors->has('digital_collection_file_6') ? 'is-invalid' : ''}}" id="digital_collection_file_6" name="digital_collection_file_6" placeholder="digital_collection_file_6" value="{{old('digital_collection_file_6', (isset($collection_geologika->digital_collection_file_6) ? $collection_geologika->digital_collection_file_6 : null)) }}">
                                                @if($errors->has('digital_collection_file_6'))
                                                    <div class="invalid-feedback">
                                                        {{$errors->first('digital_collection_file_6')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <hr>
                                            <h5>Arsip Internal</h5>
                                        </div>
                                    </div>

                                    <div class="koleksi-digital-form-wrapper">

                                        <div class="form-group row">
                                            <label for="image_archive_1" class="col-sm-4 col-form-label">Upload File <br><i>(jpg,jpeg,bmp,png,doc,docx,pdf)</i></label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control {{$errors->has('image_archive_1') ? 'is-invalid' : ''}}" id="image_archive_1" name="image_archive_1" placeholder="image_archive_1" value="{{old('image_archive_1', (isset($collection_geologika->image_archive_1) ? $collection_geologika->image_archive_1 : null)) }}">
                                                @if($errors->has('image_archive_1'))
                                                    <div class="invalid-feedback">
                                                        {{$errors->first('image_archive_1')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {{-- <label for="image_archive_2" class="col-sm-4 col-form-label">image_archive_2</label> --}}
                                            <div class="col-sm-8 offset-sm-4">
                                                <input type="file" class="form-control {{$errors->has('image_archive_2') ? 'is-invalid' : ''}}" id="image_archive_2" name="image_archive_2" placeholder="image_archive_2" value="{{old('image_archive_2', (isset($collection_geologika->image_archive_2) ? $collection_geologika->image_archive_2 : null)) }}">
                                                @if($errors->has('image_archive_2'))
                                                    <div class="invalid-feedback">
                                                        {{$errors->first('image_archive_2')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {{-- <label for="image_archive_3" class="col-sm-4 col-form-label">image_archive_3</label> --}}
                                            <div class="col-sm-8 offset-sm-4">
                                                <input type="file" class="form-control {{$errors->has('image_archive_3') ? 'is-invalid' : ''}}" id="image_archive_3" name="image_archive_3" placeholder="image_archive_3" value="{{old('image_archive_3', (isset($collection_geologika->image_archive_3) ? $collection_geologika->image_archive_3 : null)) }}">
                                                @if($errors->has('image_archive_3'))
                                                    <div class="invalid-feedback">
                                                        {{$errors->first('image_archive_3')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {{-- <label for="image_archive_4" class="col-sm-4 col-form-label">image_archive_4</label> --}}
                                            <div class="col-sm-8 offset-sm-4">
                                                <input type="file" class="form-control {{$errors->has('image_archive_4') ? 'is-invalid' : ''}}" id="image_archive_4" name="image_archive_4" placeholder="image_archive_4" value="{{old('image_archive_4', (isset($collection_geologika->image_archive_4) ? $collection_geologika->image_archive_4 : null)) }}">
                                                @if($errors->has('image_archive_4'))
                                                    <div class="invalid-feedback">
                                                        {{$errors->first('image_archive_4')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {{-- <label for="image_archive_5" class="col-sm-4 col-form-label">image_archive_5</label> --}}
                                            <div class="col-sm-8 offset-sm-4">
                                                <input type="file" class="form-control {{$errors->has('image_archive_5') ? 'is-invalid' : ''}}" id="image_archive_5" name="image_archive_5" placeholder="image_archive_5" value="{{old('image_archive_5', (isset($collection_geologika->image_archive_5) ? $collection_geologika->image_archive_5 : null)) }}">
                                                @if($errors->has('image_archive_5'))
                                                    <div class="invalid-feedback">
                                                        {{$errors->first('image_archive_5')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {{-- <label for="image_archive_6" class="col-sm-4 col-form-label">image_archive_6</label> --}}
                                            <div class="col-sm-8 offset-sm-4">
                                                <input type="file" class="form-control {{$errors->has('image_archive_6') ? 'is-invalid' : ''}}" id="image_archive_6" name="image_archive_6" placeholder="image_archive_6" value="{{old('image_archive_6', (isset($collection_geologika->image_archive_6) ? $collection_geologika->image_archive_6 : null)) }}">
                                                @if($errors->has('image_archive_6'))
                                                    <div class="invalid-feedback">
                                                        {{$errors->first('image_archive_6')}}
                                                    </div>
                                                @endif
                                            </div>
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


@section('scripts')
    <script>
        $(function(){
            $('.koleksi-digital-btn-add').on('click', function(e){
                e.preventDefault();

                $('.koleksi-digital-form-group').first().clone().appendTo('.koleksi-digital-form-wrapper');
            });

            $('input[type=file]').change(function() { 
                // select the form and submit
                // var collection_id = $('#collection_id').val();
                console.log('selected', $(this));

                
            });
        });
    </script>
@endsection
