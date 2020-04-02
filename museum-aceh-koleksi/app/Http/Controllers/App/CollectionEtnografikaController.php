<?php

namespace App\Http\Controllers\App;

use App\Collection;
use App\CollectionEtnografika;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionEtnografikaController extends Controller
{

    public function data(Request $request)
    {
        $limit               = $request->filled('limit') ? $request->get('limit')  : 10;
		$offset              = $request->filled('offset') ? $request->get('offset'): 0;
		$search              = $request->filled('search') ? $request->get('search'): '';
		$sort                = $request->filled('sort') ? $request->get('sort')    : 'id';
        $order               = $request->filled('order') ? $request->get('order')  : 'ASC';
        
        $list_collection_etnografika = Collection::with('collectionable')->where([
            ['saved', '=', 1],
            ['collectionable_type', '=', 'App\\CollectionEtnografika'],
        ])->search($search);
        $data['total'] = $list_collection_etnografika->count();


        $list_collection_etnografika->skip($offset);
        $list_collection_etnografika->limit($limit);
        $list_collection_etnografika->orderBy($sort, $order);

        $data['rows'] = $list_collection_etnografika->get();

        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $collectionable_type = 'etnografika';
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
    public function show(CollectionEtnografika $collection_etnografika)
    {
        $collectionable_type = 'App\\CollectionEtnografika';
        return view('app.collection.show', compact('collectionable_type', 'collection_etnografika'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CollectionEtnografika $collection_etnografika)
    {
        return view('app.collection.form', compact('collection_etnografika'));
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
