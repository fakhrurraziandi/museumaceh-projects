<?php

namespace App\Http\Controllers\App;

use App\Collection;
use App\CollectionArkeologika;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionArkeologikaController extends Controller
{

    public function data(Request $request)
    {
        $limit               = $request->filled('limit') ? $request->get('limit')  : 10;
		$offset              = $request->filled('offset') ? $request->get('offset'): 0;
		$search              = $request->filled('search') ? $request->get('search'): '';
		$sort                = $request->filled('sort') ? $request->get('sort')    : 'id';
        $order               = $request->filled('order') ? $request->get('order')  : 'ASC';
        
        $list_collection_arkeologika = Collection::with('collectionable')->where([
            ['saved', '=', 1],
            ['collectionable_type', '=', 'App\\CollectionArkeologika'],
        ])->search($search);
        $data['total'] = $list_collection_arkeologika->count();


        $list_collection_arkeologika->skip($offset);
        $list_collection_arkeologika->limit($limit);
        $list_collection_arkeologika->orderBy($sort, $order);

        $data['rows'] = $list_collection_arkeologika->get();

        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $collectionable_type = 'arkeologika';
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
    public function show(CollectionArkeologika $collection_arkeologika)
    {
        $collectionable_type = 'App\\CollectionArkeologika';
        return view('app.collection.show', compact('collectionable_type', 'collection_arkeologika'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CollectionArkeologika $collection_arkeologika)
    {
        return view('app.collection.form', compact('collection_arkeologika'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionArkeologika $collection_arkeologika)
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
