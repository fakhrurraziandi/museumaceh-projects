<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function home()
    {
        return view('app.beranda.home');
    }

    public function index()
    {
        return view('app.beranda.index');
    }
}
