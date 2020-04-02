<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
        $offset = $request->filled('offset') ? $request->get('offset') : 0;
        $search = $request->filled('search') ? $request->get('search') : '';
        $sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';

        $categories = Category::whereLike([
            'name',
            'slug',
            'description',
        ], $search);
        $data['total'] = $categories->count();


        $categories->skip($offset);
        $categories->limit($limit);
        $categories->orderBy($sort, $order);

        $data['rows'] = $categories->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required'],
            'slug' => ['required'],
            // 'description' => ['required'],
        ]);


        $data = $request->all();

        Category::create($data);

        return redirect()->route('admin.category.index');
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
    public function edit(Category $category)
    {
        // return $category;
        return view('admin.category.form', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required'],
            'slug' => ['required'],
            // 'description' => ['required'],
        ]);

        $data = $request->all();
        $category->update($data);

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
