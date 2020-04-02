<?php

namespace App\Http\Controllers\App;

use App\Collection;
use App\CollectionBiologika;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionBiologikaController extends Controller
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
        $collection_biologika = CollectionBiologika::create([

            'nama_latin' => null,
            'kingdom' => null,
            'phylum' => null,
            'class' => null,
            'order' => null,
            'sub_order' => null,
            'famili' => null,
            'sub_famili' => null,
            'genus' => null,
            'spesies' => null,
            'sub_species' => null,
            'habitat' => null,
            'endemik' => null,
            'status' => null,
            'warna' => null,
            'teknik_pengawetan' => null,
            'petugas_preparasi' => null,
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
            'collectionable_type' => CollectionBiologika::class,
            'collectionable_id' => $collection_biologika->id,
        ]);

        return redirect()->route('app.collection_biologika.edit', $collection_biologika->id);
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

            // 'nama_latin' => ['required'],
            // 'kingdom' => ['required'],
            // 'phylum' => ['required'],
            // 'class' => ['required'],
            // 'order' => ['required'],
            // 'sub_order' => ['required'],
            // 'famili' => ['required'],
            // 'sub_famili' => ['required'],
            // 'genus' => ['required'],
            // 'spesies' => ['required'],
            // 'sub_species' => ['required'],
            // 'habitat' => ['required'],
            // 'endemik' => ['required'],
            // 'status' => ['required'],
            // 'warna' => ['required'],
            // 'teknik_pengawetan' => ['required'],
            // 'petugas_preparasi' => ['required'],
        ]);

        $collection_biologika = CollectionBiologika::create([

            'nama_latin' => $request->get('nama_latin'),
            'kingdom' => $request->get('kingdom'),
            'phylum' => $request->get('phylum'),
            'class' => $request->get('class'),
            'order' => $request->get('order'),
            'sub_order' => $request->get('sub_order'),
            'famili' => $request->get('famili'),
            'sub_famili' => $request->get('sub_famili'),
            'genus' => $request->get('genus'),
            'spesies' => $request->get('spesies'),
            'sub_species' => $request->get('sub_species'),
            'habitat' => $request->get('habitat'),
            'endemik' => $request->get('endemik'),
            'status' => $request->get('status'),
            'warna' => $request->get('warna'),
            'teknik_pengawetan' => $request->get('teknik_pengawetan'),
            'petugas_preparasi' => $request->get('petugas_preparasi'),
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
            'collectionable_type' => CollectionBiologika::class,
            'collectionable_id' => $collection_biologika->id,
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
    public function edit(CollectionBiologika $collection_biologika)
    {
        return view('app.collection_biologika.form', compact('collection_biologika'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionBiologika $collection_biologika)
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

            // 'nama_latin' => ['required'],
            // 'kingdom' => ['required'],
            // 'phylum' => ['required'],
            // 'class' => ['required'],
            // 'order' => ['required'],
            // 'sub_order' => ['required'],
            // 'famili' => ['required'],
            // 'sub_famili' => ['required'],
            // 'genus' => ['required'],
            // 'spesies' => ['required'],
            // 'sub_species' => ['required'],
            // 'habitat' => ['required'],
            // 'endemik' => ['required'],
            // 'status' => ['required'],
            // 'warna' => ['required'],
            // 'teknik_pengawetan' => ['required'],
            // 'petugas_preparasi' => ['required'],
        ]);

        

        $collection_biologika->update([

            'nama_latin' => $request->get('nama_latin'),
            'kingdom' => $request->get('kingdom'),
            'phylum' => $request->get('phylum'),
            'class' => $request->get('class'),
            'order' => $request->get('order'),
            'sub_order' => $request->get('sub_order'),
            'famili' => $request->get('famili'),
            'sub_famili' => $request->get('sub_famili'),
            'genus' => $request->get('genus'),
            'spesies' => $request->get('spesies'),
            'sub_species' => $request->get('sub_species'),
            'habitat' => $request->get('habitat'),
            'endemik' => $request->get('endemik'),
            'status' => $request->get('status'),
            'warna' => $request->get('warna'),
            'teknik_pengawetan' => $request->get('teknik_pengawetan'),
            'petugas_preparasi' => $request->get('petugas_preparasi'),
        ]);

        

        $collection_biologika->collection->update([
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
            'collectionable_type' => CollectionBiologika::class,
            'collectionable_id' => $collection_biologika->id,
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
