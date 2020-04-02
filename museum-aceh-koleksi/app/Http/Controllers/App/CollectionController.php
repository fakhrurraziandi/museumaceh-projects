<?php

namespace App\Http\Controllers\App;

use App\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionController extends Controller
{

    public function data(Request $request)
    {
        $limit               = $request->filled('limit') ? $request->get('limit')  : 10;
		$offset              = $request->filled('offset') ? $request->get('offset'): 0;
		$search              = $request->filled('search') ? $request->get('search'): '';
		$sort                = $request->filled('sort') ? $request->get('sort')    : 'id';
        $order               = $request->filled('order') ? $request->get('order')  : 'ASC';
        $collectionable_type = $request->filled('collectionable_type') ? $request->get('collectionable_type') : null;
        
        $where = [
            ['saved', '=', 1],
        ];

        if(!is_null($collectionable_type) and !empty($collectionable_type)){
            $where[] = ['collectionable_type', '=', $collectionable_type];
        }

        
        
        $list_collection = Collection::where($where)->search($search);
        $data['total'] = $list_collection->count();


        $list_collection->skip($offset);
        $list_collection->limit($limit);
        $list_collection->orderBy($sort, $order);

        $data['rows'] = $list_collection->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.collection.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.collection.form');
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

        Collection::create($request->all());

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
    public function edit(Collection $collection)
    {
        $collectionable_id = $collection->collectionable_id;
        $collectionable_type = $collection->collectionable_type;
        $collectionable_type = camelcase_to_underscore(str_replace("App\\", '', $collectionable_type));

        return redirect()->route('app.'. $collectionable_type . '.edit', $collectionable_id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        $request->validate([
            'nama' => ['required'],
            'tarif_individu' => ['required'],
            'tarif_rombongan' => ['required'],
        ]);

        $collection->update($request->all());

        return redirect()->route('app.collection.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();

        return redirect()->route('app.collection.index');
    }
}
