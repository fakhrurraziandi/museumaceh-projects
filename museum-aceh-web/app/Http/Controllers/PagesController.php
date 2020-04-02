<?php

namespace App\Http\Controllers;

use App\Page;
use App\Post;
use App\Event;
use App\Category;
use App\ContactMessage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $events = Event::limit(4)->get();
        $posts = Post::limit(4)->get();
        return view('pages.home', compact('events', 'posts'));
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('pages.page', compact('page'));
    }

    public function posts()
    {
        $posts = Post::paginate(5);
        return view('pages.posts', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('pages.post', compact('post'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = Post::where('category_id', $category->id)->paginate(5);

        return view('pages.category', compact('category', 'posts'));
    }

    public function events()
    {
        $events = Event::paginate(5);
        return view('pages.events', compact('events'));
    }

    public function event($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('pages.event', compact('event'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contact_submit(Request $request)
    {
        $request->validate([
            'category' => ['required'],
            'email' => ['required'],
            'name' => ['required'],
            'message' => ['required'],
        ]);


        ContactMessage::create($request->all());

        return redirect()->back()->with('success', 'Pesan Kontak anda berhasil terkirim, kami akan segera merespon pesan anda. terima kasih');


        
    }

    
}
