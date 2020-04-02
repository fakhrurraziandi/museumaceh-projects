<?php
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
                                <tr class="bg-success text-white">
                                    <th>No</th>
                                    <th>Bulan</th>
                                    @foreach(KategoriPengunjung::all() as $kategori_pengunjung)
                                        <th>{{$kategori_pengunjung->nama}}</th>
                                        @if($kategori_pengunjung->enable_rombongan)
                                            <th>Rombongan {{$kategori_pengunjung->nama}}</th>
                                        @endif
                                    @endforeach
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; $total = 0; ?>
                                @foreach($list_bulan as $bulan_angka => $bulan_nama)
                                    <?php $sub_total = 0; ?>
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$bulan_nama}}</td>
                                        @foreach(KategoriPengunjung::all() as $kategori_pengunjung)
                                            <td>
                                                <?php  
                                                $jumlah_individu = (int) Kunjungan::where([
                                                    ['kategori_pengunjung_id', '=', $kategori_pengunjung->id],
                                                    ['rombongan', '=', null],
                                                ])->whereMonth('created_at', '=', $bulan_angka)
                                                ->whereYear('created_at', '=', $selected_tahun)->sum('jumlah');
                                                $sub_total += $jumlah_individu;
                                                echo $jumlah_individu;
                                                ?>
                                            </td>
                                            @if($kategori_pengunjung->enable_rombongan)
                                                <td>
                                                    <?php  
                                                    $jumlah_rombongan = (int) Kunjungan::where([
                                                        ['kategori_pengunjung_id', '=', $kategori_pengunjung->id],
                                                        ['rombongan', '!=', null],
                                                    ])->whereMonth('created_at', '=', $bulan_angka)
                                                    ->whereYear('created_at', '=', $selected_tahun)->sum('jumlah');
                                                    $sub_total += $jumlah_rombongan;
                                                    echo $jumlah_rombongan;
                                                    ?>
                                                </td>
                                            @endif
                                        @endforeach
                                        <td>{{$sub_total}}</td>
                                    </tr>
                                    <?php $total += $sub_total ?>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Jumlah:</th>
                                    @foreach(KategoriPengunjung::all() as $kategori_pengunjung)
                                        <th>
                                            <?php  
                                            $total_individu = (int) Kunjungan::where([
                                                ['kategori_pengunjung_id', '=', $kategori_pengunjung->id],
                                                ['rombongan', '=', null],
                                            ])->whereYear('created_at', '=', $selected_tahun)->sum('jumlah');
                                            echo $total_individu;
                                            ?>
                                        </th>
                                        @if($kategori_pengunjung->enable_rombongan)
                                            <th>
                                                <?php  
                                                $total_rombongan = (int) Kunjungan::where([
                                                    ['kategori_pengunjung_id', '=', $kategori_pengunjung->id],
                                                    ['rombongan', '!=', null],
                                                ])->whereYear('created_at', '=', $selected_tahun)->sum('jumlah');
                                                echo $total_rombongan;
                                                ?>
                                            </th>
                                        @endif
                                    @endforeach
                                    <th>
                                        <?php 
                                        $grand_total = (int) Kunjungan::whereYear('created_at', '=', $selected_tahun)->sum('jumlah');
                                        echo $grand_total;
                                        ?>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

