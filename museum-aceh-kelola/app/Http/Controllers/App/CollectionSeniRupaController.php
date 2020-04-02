<?php

namespace App\Http\Controllers\App;

use App\Collection;
use App\CollectionSeniRupa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionSeniRupaController extends Controller
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
        $collection_seni_rupa = CollectionSeniRupa::create([


            'pelukis' => null,
            'tahun_lukisan' => null,
            'lokasi_pembuatan' => null,
            'gaya_lukisan' => null,
            'bahan_alas' => null,
            'bingkai' => null,
            'jenis_tinta' => null,
            'warna_lukisan' => null,

            
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
            'collectionable_type' => CollectionSeniRupa::class,
            'collectionable_id' => $collection_seni_rupa->id,
        ]);

        return redirect()->route('app.collection_seni_rupa.edit', $collection_seni_rupa->id);
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

            // 'pelukis' => ['required'],
            // 'tahun_lukisan' => ['required'],
            // 'lokasi_pembuatan' => ['required'],
            // 'gaya_lukisan' => ['required'],
            // 'bahan_alas' => ['required'],
            // 'bingkai' => ['required'],
            // 'jenis_tinta' => ['required'],
            // 'warna_lukisan' => ['required'],

           
        ]);

        $collection_seni_rupa = CollectionSeniRupa::create([


            
            'pelukis' => $request->get('pelukis'),
            'tahun_lukisan' => $request->get('tahun_lukisan'),
            'lokasi_pembuatan' => $request->get('lokasi_pembuatan'),
            'gaya_lukisan' => $request->get('gaya_lukisan'),
            'bahan_alas' => $request->get('bahan_alas'),
            'bingkai' => $request->get('bingkai'),
            'jenis_tinta' => $request->get('jenis_tinta'),
            'warna_lukisan' => $request->get('warna_lukisan'),

            
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
            'collectionable_type' => CollectionSeniRupa::class,
            'collectionable_id' => $collection_seni_rupa->id,
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
    public function edit(CollectionSeniRupa $collection_seni_rupa)
    {
        return view('app.collection_seni_rupa.form', compact('collection_seni_rupa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionSeniRupa $collection_seni_rupa)
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

            // 'pelukis' => ['required'],
            // 'tahun_lukisan' => ['required'],
            // 'lokasi_pembuatan' => ['required'],
            // 'gaya_lukisan' => ['required'],
            // 'bahan_alas' => ['required'],
            // 'bingkai' => ['required'],
            // 'jenis_tinta' => ['required'],
            // 'warna_lukisan' => ['required'],

          
        ]);

        

        $collection_seni_rupa->update([


            'pelukis' => $request->get('pelukis'),
            'tahun_lukisan' => $request->get('tahun_lukisan'),
            'lokasi_pembuatan' => $request->get('lokasi_pembuatan'),
            'gaya_lukisan' => $request->get('gaya_lukisan'),
            'bahan_alas' => $request->get('bahan_alas'),
            'bingkai' => $request->get('bingkai'),
            'jenis_tinta' => $request->get('jenis_tinta'),
            'warna_lukisan' => $request->get('warna_lukisan'),

            
        ]);

        

        $collection_seni_rupa->collection->update([
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
            'collectionable_type' => CollectionSeniRupa::class,
            'collectionable_id' => $collection_seni_rupa->id,
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
