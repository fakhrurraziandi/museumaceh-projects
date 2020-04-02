<?php

namespace App\Http\Controllers\App;

use App\Collection;
use App\CollectionHistorika;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionHistorikaController extends Controller
{

    public function data(Request $request)
    {
        $limit               = $request->filled('limit') ? $request->get('limit')  : 10;
		$offset              = $request->filled('offset') ? $request->get('offset'): 0;
		$search              = $request->filled('search') ? $request->get('search'): '';
		$sort                = $request->filled('sort') ? $request->get('sort')    : 'id';
        $order               = $request->filled('order') ? $request->get('order')  : 'ASC';
        
        $list_collection_historika = Collection::with('collectionable')->where([
            ['saved', '=', 1],
            ['collectionable_type', '=', 'App\\CollectionHistorika'],
        ])->search($search);
        $data['total'] = $list_collection_historika->count();


        $list_collection_historika->skip($offset);
        $list_collection_historika->limit($limit);
        $list_collection_historika->orderBy($sort, $order);

        $data['rows'] = $list_collection_historika->get();

        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $collectionable_type = 'historika';
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
    public function show(CollectionHistorika $collection_historika)
    {
        $collectionable_type = 'App\\CollectionHistorika';
        return view('app.collection.show', compact('collectionable_type', 'collection_historika'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CollectionHistorika $collection_historika)
    {
        return view('app.collection.form', compact('collection_historika'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionHistorika $collection_historika)
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
