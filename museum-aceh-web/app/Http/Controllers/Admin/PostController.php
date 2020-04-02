<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
        $offset = $request->filled('offset') ? $request->get('offset') : 0;
        $search = $request->filled('search') ? $request->get('search') : '';
        $sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';

        $posts = Post::whereLike([
            'title',
            'slug',
            'body',
            'user.name',
            'status',
            'category.id',
        ], $search);
        $data['total'] = $posts->count();


        $posts->skip($offset);
        $posts->limit($limit);
        $posts->orderBy($sort, $order);

        $data['rows'] = $posts->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.form');
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
            // 'user_id' => ['required'],
            // 'status' => ['required'],
            'category_id' => ['required'],
        ]);


        $data = array_merge($request->all(), [
            'user_id' => $user->id,
        ]);

        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
            $filename = 'uploads/featured_images/' . md5(rand(0, 9999)) . '.' . $featured_image->getClientOriginalExtension();
            Storage::disk('upload')->put($filename, File::get($featured_image));

            $data['featured_image'] = $filename;
        }

        

        Post::create($data);

        return redirect()->route('admin.post.index');
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
    public function edit(Post $post)
    {
        // return $post;
        return view('admin.post.form', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $user = Auth::user();
        
        $request->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'body' => ['required'],
            // 'user_id' => ['required'],
            // 'status' => ['required'],
            'category_id' => ['required'],
        ]);

        $data = array_merge($request->all(), [
            'user_id' => $user->id,
        ]);

        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
            $filename = 'uploads/featured_images/' . md5(rand(0, 9999)) . '.' . $featured_image->getClientOriginalExtension();
            Storage::disk('upload')->put($filename, File::get($featured_image));

            $data['featured_image'] = $filename;
        }

        $post->update($data);

        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
