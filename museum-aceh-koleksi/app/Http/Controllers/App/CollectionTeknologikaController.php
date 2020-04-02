<?php

namespace App\Http\Controllers\App;

use App\Collection;
use App\CollectionTeknologika;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionTeknologikaController extends Controller
{

    public function data(Request $request)
    {
        $limit               = $request->filled('limit') ? $request->get('limit')  : 10;
		$offset              = $request->filled('offset') ? $request->get('offset'): 0;
		$search              = $request->filled('search') ? $request->get('search'): '';
		$sort                = $request->filled('sort') ? $request->get('sort')    : 'id';
        $order               = $request->filled('order') ? $request->get('order')  : 'ASC';
        
        $list_collection_teknologika = Collection::with('collectionable')->where([
            ['saved', '=', 1],
            ['collectionable_type', '=', 'App\\CollectionTeknologika'],
        ])->search($search);
        $data['total'] = $list_collection_teknologika->count();


        $list_collection_teknologika->skip($offset);
        $list_collection_teknologika->limit($limit);
        $list_collection_teknologika->orderBy($sort, $order);

        $data['rows'] = $list_collection_teknologika->get();

        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $collectionable_type = 'teknologika';
        return view('app.collection.index', compact('collectionable_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CollectionTeknologika $collection_teknologika)
    {
        $collectionable_type = 'App\\CollectionTeknologika';
        return view('app.collection.show', compact('collectionable_type', 'collection_teknologika'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CollectionTeknologika $collection_teknologika)
    {
        return view('app.collection.form', compact('collection_teknologika'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionTeknologika $collection_teknologika)
    {
        
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
