<?php

namespace App\Http\Controllers\App;

use App\Collection;
use App\ImageArchive;
use App\DigitalCollection;
use App\CollectionGeologika;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CollectionGeologikaController extends Controller
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
        $collection_geologika = CollectionGeologika::create([
            'mineral_utama' => null,
            'mineral_sekunder' => null,
            'senyawa_kimia' => null,
            'jenis' => null,
            'tekstur' => null,
            'struktur' => null,
            'proses_pembentukan' => null,
            'warna' => null,
            'karat' => null,
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
            'collectionable_type' => CollectionGeologika::class,
            'collectionable_id' => $collection_geologika->id,
        ]);

        return redirect()->route('app.collection_geologika.edit', $collection_geologika->id);
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

            // 'mineral_utama' => ['required'],
            // 'mineral_sekunder' => ['required'],
            // 'senyawa_kimia' => ['required'],
            // 'jenis' => ['required'],
            // 'tekstur' => ['required'],
            // 'struktur' => ['required'],
            // 'proses_pembentukan' => ['required'],
            // 'warna' => ['required'],
            // 'karat' => ['required'],
        ]);

        $collection_geologika = CollectionGeologika::create([
            'mineral_utama' => $request->get('mineral_utama'),
            'mineral_sekunder' => $request->get('mineral_sekunder'),
            'senyawa_kimia' => $request->get('senyawa_kimia'),
            'jenis' => $request->get('jenis'),
            'tekstur' => $request->get('tekstur'),
            'struktur' => $request->get('struktur'),
            'proses_pembentukan' => $request->get('proses_pembentukan'),
            'warna' => $request->get('warna'),
            'karat' => $request->get('karat'),
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
            'collectionable_type' => CollectionGeologika::class,
            'collectionable_id' => $collection_geologika->id,
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
    public function edit(CollectionGeologika $collection_geologika)
    {
        return view('app.collection_geologika.form', compact('collection_geologika'));
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionGeologika $collection_geologika)
    {

        // return $request->file('digital_collection_file');

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

            // 'mineral_utama' => ['required'],
            // 'mineral_sekunder' => ['required'],
            // 'senyawa_kimia' => ['required'],
            // 'jenis' => ['required'],
            // 'tekstur' => ['required'],
            // 'struktur' => ['required'],
            // 'proses_pembentukan' => ['required'],
            // 'warna' => ['required'],
            // 'karat' => ['required'],


            'digital_collection_file_1' => ['mimes:jpg,jpeg,bmp,png,doc,docx,pdf'],
            'digital_collection_file_2' => ['mimes:jpg,jpeg,bmp,png,doc,docx,pdf'],
            'digital_collection_file_3' => ['mimes:jpg,jpeg,bmp,png,doc,docx,pdf'],
            'digital_collection_file_4' => ['mimes:jpg,jpeg,bmp,png,doc,docx,pdf'],
            'digital_collection_file_5' => ['mimes:jpg,jpeg,bmp,png,doc,docx,pdf'],
            'digital_collection_file_6' => ['mimes:jpg,jpeg,bmp,png,doc,docx,pdf'],

            'image_archive_file_1' => ['mimes:jpg,jpeg,bmp,png,doc,docx,pdf'],
            'image_archive_file_2' => ['mimes:jpg,jpeg,bmp,png,doc,docx,pdf'],
            'image_archive_file_3' => ['mimes:jpg,jpeg,bmp,png,doc,docx,pdf'],
            'image_archive_file_4' => ['mimes:jpg,jpeg,bmp,png,doc,docx,pdf'],
            'image_archive_file_5' => ['mimes:jpg,jpeg,bmp,png,doc,docx,pdf'],
            'image_archive_file_6' => ['mimes:jpg,jpeg,bmp,png,doc,docx,pdf'],


        ]);

        

        $collection_geologika->update([
            'mineral_utama' => $request->get('mineral_utama'),
            'mineral_sekunder' => $request->get('mineral_sekunder'),
            'senyawa_kimia' => $request->get('senyawa_kimia'),
            'jenis' => $request->get('jenis'),
            'tekstur' => $request->get('tekstur'),
            'struktur' => $request->get('struktur'),
            'proses_pembentukan' => $request->get('proses_pembentukan'),
            'warna' => $request->get('warna'),
            'karat' => $request->get('karat'),
        ]);

        

        $collection_geologika->collection->update([
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
            'collectionable_type' => CollectionGeologika::class,
            'collectionable_id' => $collection_geologika->id,
            'saved' => true,
            'published' => $request->get('published'),
        ]);

        if($request->hasFile('digital_collection_file_1')){

            $digital_collection_file_1 = $request->file('digital_collection_file_1');
            $digital_collection_file_1_filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $digital_collection_file_1->getClientOriginalExtension();
            Storage::disk('public')->put($digital_collection_file_1_filename, File::get($digital_collection_file_1));

            DigitalCollection::create([
                'file' => $digital_collection_file_1_filename,
                'collection_id' => $collection_geologika->collection->id
            ]);
        }

        if($request->hasFile('digital_collection_file_2')){

            $digital_collection_file_2 = $request->file('digital_collection_file_2');
            $digital_collection_file_2_filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $digital_collection_file_2->getClientOriginalExtension();
            Storage::disk('public')->put($digital_collection_file_2_filename, File::get($digital_collection_file_2));

            DigitalCollection::create([
                'file' => $digital_collection_file_2_filename,
                'collection_id' => $collection_geologika->collection->id
            ]);
        }

        if($request->hasFile('digital_collection_file_3')){

            $digital_collection_file_3 = $request->file('digital_collection_file_3');
            $digital_collection_file_3_filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $digital_collection_file_3->getClientOriginalExtension();
            Storage::disk('public')->put($digital_collection_file_3_filename, File::get($digital_collection_file_3));

            DigitalCollection::create([
                'file' => $digital_collection_file_3_filename,
                'collection_id' => $collection_geologika->collection->id
            ]);
        }

        if($request->hasFile('digital_collection_file_4')){

            $digital_collection_file_4 = $request->file('digital_collection_file_4');
            $digital_collection_file_4_filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $digital_collection_file_4->getClientOriginalExtension();
            Storage::disk('public')->put($digital_collection_file_4_filename, File::get($digital_collection_file_4));

            DigitalCollection::create([
                'file' => $digital_collection_file_4_filename,
                'collection_id' => $collection_geologika->collection->id
            ]);
        }

        if($request->hasFile('digital_collection_file_5')){

            $digital_collection_file_5 = $request->file('digital_collection_file_5');
            $digital_collection_file_5_filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $digital_collection_file_5->getClientOriginalExtension();
            Storage::disk('public')->put($digital_collection_file_5_filename, File::get($digital_collection_file_5));

            DigitalCollection::create([
                'file' => $digital_collection_file_5_filename,
                'collection_id' => $collection_geologika->collection->id
            ]);
        }

        if($request->hasFile('digital_collection_file_6')){

            $digital_collection_file_6 = $request->file('digital_collection_file_6');
            $digital_collection_file_6_filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $digital_collection_file_6->getClientOriginalExtension();
            Storage::disk('public')->put($digital_collection_file_6_filename, File::get($digital_collection_file_6));

            DigitalCollection::create([
                'file' => $digital_collection_file_6_filename,
                'collection_id' => $collection_geologika->collection->id
            ]);
        }

        // ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


        if($request->hasFile('image_archive_file_1')){

            $image_archive_file_1 = $request->file('image_archive_file_1');
            $image_archive_file_1_filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $image_archive_file_1->getClientOriginalExtension();
            Storage::disk('public')->put($image_archive_file_1_filename, File::get($image_archive_file_1));

            ImageArchive::create([
                'file' => $image_archive_file_1_filename,
                'collection_id' => $collection_geologika->collection->id
            ]);
        }

        if($request->hasFile('image_archive_file_2')){

            $image_archive_file_2 = $request->file('image_archive_file_2');
            $image_archive_file_2_filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $image_archive_file_2->getClientOriginalExtension();
            Storage::disk('public')->put($image_archive_file_2_filename, File::get($image_archive_file_2));

            ImageArchive::create([
                'file' => $image_archive_file_2_filename,
                'collection_id' => $collection_geologika->collection->id
            ]);
        }

        if($request->hasFile('image_archive_file_3')){

            $image_archive_file_3 = $request->file('image_archive_file_3');
            $image_archive_file_3_filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $image_archive_file_3->getClientOriginalExtension();
            Storage::disk('public')->put($image_archive_file_3_filename, File::get($image_archive_file_3));

            ImageArchive::create([
                'file' => $image_archive_file_3_filename,
                'collection_id' => $collection_geologika->collection->id
            ]);
        }

        if($request->hasFile('image_archive_file_4')){

            $image_archive_file_4 = $request->file('image_archive_file_4');
            $image_archive_file_4_filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $image_archive_file_4->getClientOriginalExtension();
            Storage::disk('public')->put($image_archive_file_4_filename, File::get($image_archive_file_4));

            ImageArchive::create([
                'file' => $image_archive_file_4_filename,
                'collection_id' => $collection_geologika->collection->id
            ]);
        }

        if($request->hasFile('image_archive_file_5')){

            $image_archive_file_5 = $request->file('image_archive_file_5');
            $image_archive_file_5_filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $image_archive_file_5->getClientOriginalExtension();
            Storage::disk('public')->put($image_archive_file_5_filename, File::get($image_archive_file_5));

            ImageArchive::create([
                'file' => $image_archive_file_5_filename,
                'collection_id' => $collection_geologika->collection->id
            ]);
        }

        if($request->hasFile('image_archive_file_6')){

            $image_archive_file_6 = $request->file('image_archive_file_6');
            $image_archive_file_6_filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $image_archive_file_6->getClientOriginalExtension();
            Storage::disk('public')->put($image_archive_file_6_filename, File::get($image_archive_file_6));

            ImageArchive::create([
                'file' => $image_archive_file_6_filename,
                'collection_id' => $collection_geologika->collection->id
            ]);
        }

        

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
