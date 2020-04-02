<?php

namespace App\Http\Controllers\App;

use App\Booth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoothController extends Controller
{

    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
		$offset = $request->filled('offset') ? $request->get('offset') : 0;
		$search = $request->filled('search') ? $request->get('search') : '';
		$sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';
        
        $list_booth = Booth::search($search);
        $data['total'] = $list_booth->count();


        $list_booth->skip($offset);
        $list_booth->limit($limit);
        $list_booth->orderBy($sort, $order);

        $data['rows'] = $list_booth->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.booth.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.booth.form');
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
            // 'deskripsi' => ['required'],
        ];

        $request->validate($rules);

        Booth::create($request->all());

        return redirect()->route('app.booth.index');
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
    public function edit(Booth $booth)
    {
        return view('app.booth.form', compact('booth'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booth $booth)
    {
        $request->validate([
            'nama' => ['required'],
            // 'deskripsi' => ['required'],
        ]);

        $booth->update($request->all());

        return redirect()->route('app.booth.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booth $booth)
    {
        $booth->delete();

        return redirect()->route('app.booth.index');
    }
}
