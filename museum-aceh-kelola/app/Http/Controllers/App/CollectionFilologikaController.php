<?php

namespace App\Http\Controllers\App;

use App\Collection;
use App\CollectionFilologika;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionFilologikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collection_filologika = CollectionFilologika::create([

            'sub_judul' => null,
            'pengarang' => null,
            'penyalin' => null,
            'tempat_penulisan' => null,
            'tahun_penulisan' => null,
            'tahun_penyalinan' => null,
            'bahasa_dan_aksara' => null,
            'bentuk_teks' => null,
            'jenis_tulisan' => null,
            'bahan_alas_naskah' => null,
            'bahan_sampul' => null,
            'jenis_penjilidan' => null,
            'jumlah_halaman' => null,
            'jumlah_baris_halaman' => null,
            'illustrasi' => null,
            'jenis_tinta' => null,
            'warna_tinta' => null,
            'watermark' => null,

            
        ]);

        $collection = Collection::create([
            'nama' => null,
            'nomor_inventaris' => null,
            'tanggal_inventaris' => null,
            'tanggal_pengadaan' => null,
            'kondisi' => null,
            'ukuran_berat' => null,
            'ukuran_panjang' => null,
            'ukuran_lebar' => null,
            'ukuran_tinggi' => null,
            'cara_perolehan' => null,
            'tempat_perolehan' => null,
            'lokasi_penempatan' => null,
            'keterangan_penempatan' => null,
            'nama_pencatat' => null,
            'asal_usul' => null,
            'kode_aset' => null,
            'deskripsi_singkat' => null,
            'collectionable_type' => CollectionFilologika::class,
            'collectionable_id' => $collection_filologika->id,
        ]);

        return redirect()->route('app.collection_filologika.edit', $collection_filologika->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
            'nomor_inventaris' => ['required'],
            // 'tanggal_inventaris' => ['required'],
            // 'tanggal_pengadaan' => ['required'],
            // 'kondisi' => ['required'],
            // 'ukuran_berat' => ['required'],
            // 'ukuran_panjang' => ['required'],
            // 'ukuran_lebar' => ['required'],
            // 'ukuran_tinggi' => ['required'],
            // 'cara_perolehan' => ['required'],
            // 'tempat_perolehan' => ['required'],
            // 'lokasi_penempatan' => ['required'],
            // 'keterangan_penempatan' => ['required'],
            // 'nama_pencatat' => ['required'],
            // 'asal_usul' => ['required'],
            // 'kode_aset' => ['required'],
            // 'deskripsi_singkat' => ['required'],


            // 'sub_judul' => ['required'],
            // 'pengarang' => ['required'],
            // 'penyalin' => ['required'],
            // 'tempat_penulisan' => ['required'],
            // 'tahun_penulisan' => ['required'],
            // 'tahun_penyalinan' => ['required'],
            // 'bahasa_dan_aksara' => ['required'],
            // 'bentuk_teks' => ['required'],
            // 'jenis_tulisan' => ['required'],
            // 'bahan_alas_naskah' => ['required'],
            // 'bahan_sampul' => ['required'],
            // 'jenis_penjilidan' => ['required'],
            // 'jumlah_halaman' => ['required'],
            // 'jumlah_baris_halaman' => ['required'],
            // 'illustrasi' => ['required'],
            // 'jenis_tinta' => ['required'],
            // 'warna_tinta' => ['required'],
            // 'watermark' => ['required'],

           
        ]);

        $collection_filologika = CollectionFilologika::create([

            'sub_judul' => $request->get('sub_judul'),
            'pengarang' => $request->get('pengarang'),
            'penyalin' => $request->get('penyalin'),
            'tempat_penulisan' => $request->get('tempat_penulisan'),
            'tahun_penulisan' => $request->get('tahun_penulisan'),
            'tahun_penyalinan' => $request->get('tahun_penyalinan'),
            'bahasa_dan_aksara' => $request->get('bahasa_dan_aksara'),
            'bentuk_teks' => $request->get('bentuk_teks'),
            'jenis_tulisan' => $request->get('jenis_tulisan'),
            'bahan_alas_naskah' => $request->get('bahan_alas_naskah'),
            'bahan_sampul' => $request->get('bahan_sampul'),
            'jenis_penjilidan' => $request->get('jenis_penjilidan'),
            'jumlah_halaman' => $request->get('jumlah_halaman'),
            'jumlah_baris_halaman' => $request->get('jumlah_baris_halaman'),
            'illustrasi' => $request->get('illustrasi'),
            'jenis_tinta' => $request->get('jenis_tinta'),
            'warna_tinta' => $request->get('warna_tinta'),
            'watermark' => $request->get('watermark'),

            
        ]);

        $collection = Collection::create([
            'nama' => $request->get('nama'),
            'nomor_inventaris' => $request->get('nomor_inventaris'),
            'tanggal_inventaris' => $request->get('tanggal_inventaris'),
            'tanggal_pengadaan' => $request->get('tanggal_pengadaan'),
            'kondisi' => $request->get('kondisi'),
            'ukuran_berat' => $request->get('ukuran_berat'),
            'ukuran_panjang' => $request->get('ukuran_panjang'),
            'ukuran_lebar' => $request->get('ukuran_lebar'),
            'ukuran_tinggi' => $request->get('ukuran_tinggi'),
            'cara_perolehan' => $request->get('cara_perolehan'),
            'tempat_perolehan' => $request->get('tempat_perolehan'),
            'lokasi_penempatan' => $request->get('lokasi_penempatan'),
            'keterangan_penempatan' => $request->get('keterangan_penempatan'),
            'nama_pencatat' => $request->get('nama_pencatat'),
            'asal_usul' => $request->get('asal_usul'),
            'kode_aset' => $request->get('kode_aset'),
            'deskripsi_singkat' => $request->get('deskripsi_singkat'),
            'collectionable_type' => CollectionFilologika::class,
            'collectionable_id' => $collection_filologika->id,
        ]);

        return redirect()->route('app.collection.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CollectionFilologika $collection_filologika)
    {
        return view('app.collection_filologika.form', compact('collection_filologika'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionFilologika $collection_filologika)
    {
        $request->validate([
            'nama' => ['required'],
            'nomor_inventaris' => ['required'],
            // 'tanggal_inventaris' => ['required'],
            // 'tanggal_pengadaan' => ['required'],
            // 'kondisi' => ['required'],
            // 'ukuran_berat' => ['required'],
            // 'ukuran_panjang' => ['required'],
            // 'ukuran_lebar' => ['required'],
            // 'ukuran_tinggi' => ['required'],
            // 'cara_perolehan' => ['required'],
            // 'tempat_perolehan' => ['required'],
            // 'lokasi_penempatan' => ['required'],
            // 'keterangan_penempatan' => ['required'],
            // 'nama_pencatat' => ['required'],
            // 'asal_usul' => ['required'],
            // 'kode_aset' => ['required'],
            // 'deskripsi_singkat' => ['required'],

            // 'sub_judul' => ['required'],
            // 'pengarang' => ['required'],
            // 'penyalin' => ['required'],
            // 'tempat_penulisan' => ['required'],
            // 'tahun_penulisan' => ['required'],
            // 'tahun_penyalinan' => ['required'],
            // 'bahasa_dan_aksara' => ['required'],
            // 'bentuk_teks' => ['required'],
            // 'jenis_tulisan' => ['required'],
            // 'bahan_alas_naskah' => ['required'],
            // 'bahan_sampul' => ['required'],
            // 'jenis_penjilidan' => ['required'],
            // 'jumlah_halaman' => ['required'],
            // 'jumlah_baris_halaman' => ['required'],
            // 'illustrasi' => ['required'],
            // 'jenis_tinta' => ['required'],
            // 'warna_tinta' => ['required'],
            // 'watermark' => ['required'],


          
        ]);

        

        $collection_filologika->update([


            'sub_judul' => $request->get('sub_judul'),
            'pengarang' => $request->get('pengarang'),
            'penyalin' => $request->get('penyalin'),
            'tempat_penulisan' => $request->get('tempat_penulisan'),
            'tahun_penulisan' => $request->get('tahun_penulisan'),
            'tahun_penyalinan' => $request->get('tahun_penyalinan'),
            'bahasa_dan_aksara' => $request->get('bahasa_dan_aksara'),
            'bentuk_teks' => $request->get('bentuk_teks'),
            'jenis_tulisan' => $request->get('jenis_tulisan'),
            'bahan_alas_naskah' => $request->get('bahan_alas_naskah'),
            'bahan_sampul' => $request->get('bahan_sampul'),
            'jenis_penjilidan' => $request->get('jenis_penjilidan'),
            'jumlah_halaman' => $request->get('jumlah_halaman'),
            'jumlah_baris_halaman' => $request->get('jumlah_baris_halaman'),
            'illustrasi' => $request->get('illustrasi'),
            'jenis_tinta' => $request->get('jenis_tinta'),
            'warna_tinta' => $request->get('warna_tinta'),
            'watermark' => $request->get('watermark'),

            
        ]);

        

        $collection_filologika->collection->update([
            'nama' => $request->get('nama'),
            'nomor_inventaris' => $request->get('nomor_inventaris'),
            'tanggal_inventaris' => $request->get('tanggal_inventaris'),
            'tanggal_pengadaan' => $request->get('tanggal_pengadaan'),
            'kondisi' => $request->get('kondisi'),
            'ukuran_berat' => $request->get('ukuran_berat'),
            'ukuran_panjang' => $request->get('ukuran_panjang'),
            'ukuran_lebar' => $request->get('ukuran_lebar'),
            'ukuran_tinggi' => $request->get('ukuran_tinggi'),
            'cara_perolehan' => $request->get('cara_perolehan'),
            'tempat_perolehan' => $request->get('tempat_perolehan'),
            'lokasi_penempatan' => $request->get('lokasi_penempatan'),
            'keterangan_penempatan' => $request->get('keterangan_penempatan'),
            'nama_pencatat' => $request->get('nama_pencatat'),
            'asal_usul' => $request->get('asal_usul'),
            'kode_aset' => $request->get('kode_aset'),
            'deskripsi_singkat' => $request->get('deskripsi_singkat'),
            'collectionable_type' => CollectionFilologika::class,
            'collectionable_id' => $collection_filologika->id,
            'saved' => true,
            'published' => $request->get('published'),
        ]);

        return redirect()->route('app.collection.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
