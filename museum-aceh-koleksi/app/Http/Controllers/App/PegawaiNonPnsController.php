<?php

namespace App\Http\Controllers\App;

use App\PegawaiNonPns;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PegawaiNonPnsController extends Controller
{

    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
		$offset = $request->filled('offset') ? $request->get('offset') : 0;
		$search = $request->filled('search') ? $request->get('search') : '';
		$sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';
        
        $list_pegawai_non_pns = PegawaiNonPns::search($search);
        $data['total'] = $list_pegawai_non_pns->count();


        $list_pegawai_non_pns->skip($offset);
        $list_pegawai_non_pns->limit($limit);
        $list_pegawai_non_pns->orderBy($sort, $order);

        $data['rows'] = $list_pegawai_non_pns->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.pegawai_non_pns.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.pegawai_non_pns.form');
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
            'tahun_masuk' => ['required'],
            'penugasan' => ['required'],
            'pendidikan' => ['required'],
            'nomor_handphone' => ['required'],
            
        ];

        $request->validate($rules);

        PegawaiNonPns::create($request->all());

        return redirect()->route('app.pegawai_non_pns.index');
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
    public function edit(PegawaiNonPns $pegawai_non_pns)
    {
        return view('app.pegawai_non_pns.form', compact('pegawai_non_pns'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PegawaiNonPns $pegawai_non_pns)
    {
        $request->validate([
            'nama' => ['required'],
            'tahun_masuk' => ['required'],
            'penugasan' => ['required'],
            'pendidikan' => ['required'],
            'nomor_handphone' => ['required'],
        ]);

        $pegawai_non_pns->update($request->all());

        return redirect()->route('app.pegawai_non_pns.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PegawaiNonPns $pegawai_non_pns)
    {
        $pegawai_non_pns->delete();

        return redirect()->route('app.pegawai_non_pns.index');
    }
}
