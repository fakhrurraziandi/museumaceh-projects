<?php

namespace App\Http\Controllers\App;

use App\Collection;
use App\DigitalCollection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DigitalCollectionController extends Controller
{

    public function data(Request $request, Collection $collection)
    {
        $limit               = $request->filled('limit') ? $request->get('limit')  : 10;
		$offset              = $request->filled('offset') ? $request->get('offset'): 0;
		$search              = $request->filled('search') ? $request->get('search'): '';
		$sort                = $request->filled('sort') ? $request->get('sort')    : 'id';
        $order               = $request->filled('order') ? $request->get('order')  : 'ASC';
        
        $where = [
            ['collection_id', '=', $collection->id]
        ];

        
        
        $list_collection = DigitalCollection::where($where)->search($search);
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
    public function index(Collection $collection)
    {
        return view('app.digital_collection.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Collection $collection)
    {
        return view('app.digital_collection.form', compact('collection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Collection $collection)
    {
        $request->validate([
            'file' => ['required', 'mimes:jpg,jpeg,bmp,png']
        ]);

        $file = $request->file('file');
        $filename = 'uploads/digital_collection/'. md5(rand(0, 9999)). '.'. $file->getClientOriginalExtension();
        Storage::disk('public')->put($filename, File::get($file));

        DigitalCollection::create([
            'file' => $filename,
            'collection_id' => $collection->id
        ]);

        return redirect()->route('app.collection.digital_collection.index', $collection->id);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
