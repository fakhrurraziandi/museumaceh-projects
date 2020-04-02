<?php

namespace App\Http\Controllers\App;

use App\Event2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Event2Controller extends Controller
{

    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
		$offset = $request->filled('offset') ? $request->get('offset') : 0;
		$search = $request->filled('search') ? $request->get('search') : '';
		$sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';
        
        $list_event2 = Event2::search($search);
        $data['total'] = $list_event2->count();


        $list_event2->skip($offset);
        $list_event2->limit($limit);
        $list_event2->orderBy($sort, $order);

        $data['rows'] = $list_event2->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.event2.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.event2.form');
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
            'nama_kegiatan' => ['required'],
            'jenis' => ['required'],
            'tanggal_mulai' => ['required'],
            'tanggal_selesai' => ['required'],
            'penyelenggara' => ['required'],
            'description' => ['required'],
            
        ];

        $request->validate($rules);

        Event2::create($request->all());

        return redirect()->route('app.event2.index');
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
    public function edit(Event2 $event2)
    {
        return view('app.event2.form', compact('event2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event2 $event2)
    {
        $request->validate([
            'nama_kegiatan' => ['required'],
            'jenis' => ['required'],
            'tanggal_mulai' => ['required'],
            'tanggal_selesai' => ['required'],
            'penyelenggara' => ['required'],
            'description' => ['required'],
        ]);

        $event2->update($request->all());

        return redirect()->route('app.event2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event2 $event2)
    {
        $event2->delete();

        return redirect()->route('app.event2.index');
    }
}
