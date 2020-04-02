<?php
use App\Visitor;
use App\Kunjungan;
use App\KategoriPengunjung; 



$selected_tahun = request()->filled('tahun') ? request()->get('tahun') : date('Y');

$list_bulan = [
    1 => 'Januari',
    'Feburari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember',
];
?>
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">
                        Table Jumlah Kunjungan - Tahun {{$selected_tahun }}
                    </div>
                    <div class="card-body">


                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                                        <div class="col-sm-10">
                                            <select onchange="this.form.submit()" name="tahun" id="tahun" class="form-control">
                                                @for($i = 2019; $i <= date('Y'); $i++)
                                                    <option {{$selected_tahun == $i ? 'selected=""' : ''}} value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="bg-warning text-white">
                                    <th>No</th>
                                    <th>Bulan</th>
                                    <th>PC/Laptop</th>
                                    <th>Mobile</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; $total = 0; ?>
                                @foreach($list_bulan as $bulan_angka => $bulan_nama)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$bulan_nama}}</td>
                                        <td>{{Visitor::where('device', 'pc')->whereYear('created_at', '=', $selected_tahun)->whereMonth('created_at', '=', $bulan_angka)->count()}}</td>
                                        <td>{{Visitor::where('device', 'mobile')->whereYear('created_at', '=', $selected_tahun)->whereMonth('created_at', '=', $bulan_angka)->count()}}</td>
                                        <td>{{Visitor::whereYear('created_at', '=', $selected_tahun)->whereMonth('created_at', '=', $bulan_angka)->count()}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

