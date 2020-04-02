<?php

namespace App\Http\Controllers\App;

use App\KategoriPengunjung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriPengunjungController extends Controller
{

    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
		$offset = $request->filled('offset') ? $request->get('offset') : 0;
		$search = $request->filled('search') ? $request->get('search') : '';
		$sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';
        
        $list_kategori_pengunjung = KategoriPengunjung::search($search);
        $data['total'] = $list_kategori_pengunjung->count();


        $list_kategori_pengunjung->skip($offset);
        $list_kategori_pengunjung->limit($limit);
        $list_kategori_pengunjung->orderBy($sort, $order);

        $data['rows'] = $list_kategori_pengunjung->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.kategori_pengunjung.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.kategori_pengunjung.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama' => ['required'],
            'tarif_individu' => ['required'],
            
        ];

        if($request->get('enable_rombongan') == 1){
            $rules[] = [
                'tarif_rombongan' => ['required'],
            ];
        }

        $request->validate($rules);

        KategoriPengunjung::create($request->all());

        return redirect()->route('app.kategori_pengunjung.index');
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
    public function edit(KategoriPengunjung $kategori_pengunjung)
    {
        return view('app.kategori_pengunjung.form', compact('kategori_pengunjung'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriPengunjung $kategori_pengunjung)
    {
        $request->validate([
            'nama' => ['required'],
            'tarif_individu' => ['required'],
            'tarif_rombongan' => ['required'],
        ]);

        $kategori_pengunjung->update($request->all());

        return redirect()->route('app.kategori_pengunjung.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriPengunjung $kategori_pengunjung)
    {
        $kategori_pengunjung->delete();

        return redirect()->route('app.kategori_pengunjung.index');
    }
}
