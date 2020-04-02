<?php 
use Illuminate\Support\Facades\Auth;
?>
@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

                <p>Selamat Datang {{ Auth::user()->name }}</p>        
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5>Jumlah Berita</h5>
                        <h1>{{App\Post::count()}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <h5>Jumlah Event</h5>
                        <h1>{{App\Event::count()}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <h5>Jumlah Kunjungan</h5>
                        <h1>{{App\Kunjungan::count()}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h5>Jumlah Kunjungan</h5>
                        <h1>{{App\Kunjungan::count()}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection