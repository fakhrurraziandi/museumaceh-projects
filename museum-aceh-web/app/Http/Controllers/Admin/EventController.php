<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
        $offset = $request->filled('offset') ? $request->get('offset') : 0;
        $search = $request->filled('search') ? $request->get('search') : '';
        $sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';

        $events = Event::whereLike([
            'title',
            'slug',
            'body',
        ], $search);
        $data['total'] = $events->count();


        $events->skip($offset);
        $events->limit($limit);
        $events->orderBy($sort, $order);

        $data['rows'] = $events->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.event.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.form');
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
            'event_date' => ['required'],
            'location' => ['required'],
        ]);


        $data = $request->all();

        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
            $filename = 'uploads/featured_images/' . md5(rand(0, 9999)) . '.' . $featured_image->getClientOriginalExtension();
            Storage::disk('upload')->put($filename, File::get($featured_image));

            $data['featured_image'] = $filename;
        }

        Event::create($data);

        return redirect()->route('admin.event.index');
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
    public function edit(Event $event)
    {
        // return $event;
        return view('admin.event.form', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $user = Auth::user();
        
        $request->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'body' => ['required'],
            'event_date' => ['required'],
            'location' => ['required'],
        ]);

        $data = $request->all();

        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
            $filename = 'uploads/featured_images/' . md5(rand(0, 9999)) . '.' . $featured_image->getClientOriginalExtension();
            Storage::disk('upload')->put($filename, File::get($featured_image));

            $data['featured_image'] = $filename;
        }


        $event->update($data);

        return redirect()->route('admin.event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.event.index');
    }
}
