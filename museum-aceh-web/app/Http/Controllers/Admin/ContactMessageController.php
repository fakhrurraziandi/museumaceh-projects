<?php

namespace App\Http\Controllers\Admin;

use App\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ContactMessageController extends Controller
{
    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
        $offset = $request->filled('offset') ? $request->get('offset') : 0;
        $search = $request->filled('search') ? $request->get('search') : '';
        $sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';

        $contact_messages = ContactMessage::whereLike([
            'category',
            'name',
            'email',
            'message'
        ], $search);
        $data['total'] = $contact_messages->count();


        $contact_messages->skip($offset);
        $contact_messages->limit($limit);
        $contact_messages->orderBy($sort, $order);

        $data['rows'] = $contact_messages->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contact_message.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact_message.form');
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

        ContactMessage::create($data);

        return redirect()->route('admin.contact_message.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMessage $contact_message)
    {
        return view('admin.contact_message.show', compact('contact_message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactMessage $contact_message)
    {
        // return $contact_message;
        return view('admin.contact_message.form', compact('contact_message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactMessage $contact_message)
    {
        $request->validate([
            'name' => ['required'],
            'slug' => ['required'],
            // 'description' => ['required'],
        ]);

        $data = $request->all();
        $contact_message->update($data);

        return redirect()->route('admin.contact_message.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactMessage $contact_message)
    {
        $contact_message->delete();
        return redirect()->route('admin.contact_message.index');
    }
}
