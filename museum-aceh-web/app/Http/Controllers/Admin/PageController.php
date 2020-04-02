<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
        $offset = $request->filled('offset') ? $request->get('offset') : 0;
        $search = $request->filled('search') ? $request->get('search') : '';
        $sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';

        $pages = Page::whereLike([
            'title',
            'slug',
            'body',
        ], $search);
        $data['total'] = $pages->count();


        $pages->skip($offset);
        $pages->limit($limit);
        $pages->orderBy($sort, $order);

        $data['rows'] = $pages->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();
        
        $request->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'body' => ['required'],
        ]);


        $data = $request->all();

        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
            $filename = 'uploads/featured_images/' . md5(rand(0, 9999)) . '.' . $featured_image->getClientOriginalExtension();
            Storage::disk('upload')->put($filename, File::get($featured_image));

            $data['featured_image'] = $filename;
        }

        Page::create($data);

        return redirect()->route('admin.page.index');
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
    public function edit(Page $page)
    {
        // return $page;
        return view('admin.page.form', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $user = Auth::user();
        
        $request->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'body' => ['required'],
        ]);

        $data = $request->all();

        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
            $filename = 'uploads/featured_images/' . md5(rand(0, 9999)) . '.' . $featured_image->getClientOriginalExtension();
            Storage::disk('upload')->put($filename, File::get($featured_image));

            $data['featured_image'] = $filename;
        }


        $page->update($data);

        return redirect()->route('admin.page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.page.index');
    }
}
