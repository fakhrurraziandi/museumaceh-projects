<?php

namespace App\Http\Controllers\App;

use App\Collection;
use App\CollectionEtnografika;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionEtnografikaController extends Controller
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
        $collection_etnografika = CollectionEtnografika::create([

            'bahan_material' => null,
            'motif_corak' => null,
            'warna' => null,
            'bahan_pewarna' => null,
            'teknik_pembuatan' => null,
            'tahun_pembuatan' => null,
            'tempat_pembuatan' => null,
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
            'collectionable_type' => CollectionEtnografika::class,
            'collectionable_id' => $collection_etnografika->id,
        ]);

        return redirect()->route('app.collection_etnografika.edit', $collection_etnografika->id);
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

            // 'bahan_material' => ['required'],
            // 'motif_corak' => ['required'],
            // 'warna' => ['required'],
            // 'bahan_pewarna' => ['required'],
            // 'teknik_pembuatan' => ['required'],
            // 'tahun_pembuatan' => ['required'],
            // 'tempat_pembuatan' => ['required'],
            // 'watermark' => ['required'],

           
        ]);

        $collection_etnografika = CollectionEtnografika::create([

            'bahan_material' => $request->get('bahan_material'), 
            'motif_corak' => $request->get('motif_corak'), 
            'warna' => $request->get('warna'), 
            'bahan_pewarna' => $request->get('bahan_pewarna'), 
            'teknik_pembuatan' => $request->get('teknik_pembuatan'), 
            'tahun_pembuatan' => $request->get('tahun_pembuatan'), 
            'tempat_pembuatan' => $request->get('tempat_pembuatan'), 
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
            'collectionable_type' => CollectionEtnografika::class,
            'collectionable_id' => $collection_etnografika->id,
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
    public function edit(CollectionEtnografika $collection_etnografika)
    {
        return view('app.collection_etnografika.form', compact('collection_etnografika'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionEtnografika $collection_etnografika)
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

            // 'bahan_material' => ['required'],
            // 'motif_corak' => ['required'],
            // 'warna' => ['required'],
            // 'bahan_pewarna' => ['required'],
            // 'teknik_pembuatan' => ['required'],
            // 'tahun_pembuatan' => ['required'],
            // 'tempat_pembuatan' => ['required'],
            // 'watermark' => ['required'],

          
        ]);

        

        $collection_etnografika->update([


            'bahan_material' => $request->get('bahan_material'),
            'motif_corak' => $request->get('motif_corak'),
            'warna' => $request->get('warna'),
            'bahan_pewarna' => $request->get('bahan_pewarna'),
            'teknik_pembuatan' => $request->get('teknik_pembuatan'),
            'tahun_pembuatan' => $request->get('tahun_pembuatan'),
            'tempat_pembuatan' => $request->get('tempat_pembuatan'),
            'watermark' => $request->get('watermark'),

            
        ]);

        

        $collection_etnografika->collection->update([
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
            'collectionable_type' => CollectionEtnografika::class,
            'collectionable_id' => $collection_etnografika->id,
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
