<?php 
use App\Event2;
use App\Visitor;
use App\Kunjungan;
use Carbon\Carbon;
use App\Collection;
use App\DigitalCollection;
use App\KategoriPengunjung;
use Illuminate\Support\Facades\DB;

$list_collection_model = [
    "App\CollectionGeologika",
    "App\CollectionBiologika",
    "App\CollectionEtnografika",
    "App\CollectionArkeologika",
    "App\CollectionHistorika",
    "App\CollectionNumismatika",
    "App\CollectionFilologika",
    "App\CollectionKeramonologika",
    "App\CollectionSeniRupa",
    "App\CollectionTeknologika",
];
?>

@extends('layouts.app')

@section('content')
    <div class="content mt-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="mb-4">Beranda</h3>
                    <hr>

                    <div class="row">
                        <div class="col-sm-7">
                            <table class="table table-bordered table-sm mb-4">
                                <thead class="bg-success text-white">
                                    <tr>
                                        <th>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>Jumlah Koleksi</div>
                                                <h5 class="mb-0">{{Collection::where('saved', 1)->count()}}</h5>
                                            </div> 
                                        </th>
                                        <th>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>Koleksi Digital</div>
                                                <h5 class="mb-0">
                                                    <?php 
                                                    $count_digital_collection = 0;
                                                    foreach(Collection::where([
                                                        ['saved', '=', 1]
                                                    ])->get() as $collection){
                                                        if($collection->has('digital_collections')){
                                                            $count_digital_collection += 1;
                                                        }
                                                        // $count_digital_collection += $collection->digital_collections()->count();
                                                    }
                                                    echo $count_digital_collection;
                                                    ?>
                                                </h5>
                                            </div> 
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="">

                                    @foreach($list_collection_model as $collection_model)
                                        <tr>
                                            <td>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>{{str_replace('App\\Collection', '', $collection_model)}}</div>
                                                    <h5 class="mb-0">
                                                        <?php  
                                                            echo Collection::where([
                                                                ['collectionable_type', '=', $collection_model],
                                                                ['saved', '=', 1]
                                                            ])->count();
                                                        ?>
                                                    </h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h5 class="text-right">
                                                        <?php 
                                                        $count_digital_collection = 0;
                                                        foreach(Collection::where([
                                                            ['collectionable_type', '=', $collection_model],
                                                            ['saved', '=', 1]
                                                        ])->get() as $collection){
                                                            if($collection->has('digital_collections')){
                                                                $count_digital_collection += 1;
                                                            }
                                                            // $count_digital_collection += $collection->digital_collections()->count();
                                                        }
                                                        echo $count_digital_collection;
                                                        ?>
                                                    </h5>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                    
                                    
                                </tbody>
                            </table>

                            <table class="table table-bordered table-sm mb-4">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>Jumlah Event</div>
                                                <h5 class="mb-0">{{Event2::where('jenis', 'Event')->count()}}</h5>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>Jumlah Pameran</div>
                                                <h5 class="mb-0">{{Event2::where('jenis', 'Pameran')->count()}}</h5>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>Event Terlaksana</div>
                                                <h5 class="mb-0">{{Event2::where([['jenis', '=', 'Event'], ['tanggal_selesai', '<', DB::raw('NOW()')]])->count()}}</h5>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>Pameran Terlaksana</div>
                                                <h5 class="mb-0">{{Event2::where([['jenis', '=', 'Pameran'], ['tanggal_selesai', '<', DB::raw('NOW()')]])->count()}}</h5>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-5">
                            <table class="table table-bordered table-sm mb-4">
                                <thead>
                                    <tr class="bg-warning">
                                        <th style="vertical-align: middle;">Kunjungan</th>
                                        <th style="vertical-align: middle;">
                                            <h5>
                                                <?php 
                                                $sql = "SELECT
                                                            COUNT(ticket.id) as jumlah
                                                        FROM
                                                            ticket
                                                        INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id ";
                                                $result = DB::select( DB::raw($sql) );
                                                echo number_format($result[0]->jumlah, 0, ',', '.');
                                                ?>
                                            </h5>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach(KategoriPengunjung::all() as $kategori_pengunjung)
                                        <tr>
                                            <td style="vertical-align: middle;">{{$kategori_pengunjung->nama}}</td><td style="vertical-align: middle;">
                                                <h5>
                                                    <?php  
                                                    $sql = "SELECT
                                                                COUNT(ticket.id) as jumlah
                                                            FROM
                                                                ticket
                                                            INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                                            WHERE 
                                                                (kunjungan.rombongan IS NULL OR kunjungan.rombongan = 0) AND 
                                                                kunjungan.kategori_pengunjung_id = ". $kategori_pengunjung->id;
                                                    $result = DB::select( DB::raw($sql) );
                                                    echo number_format($result[0]->jumlah, 0, ',', '.');

                                                    // $jumlah_individu = (int) Kunjungan::where([
                                                    //     ['kategori_pengunjung_id', '=', $kategori_pengunjung->id],
                                                    //     ['rombongan', '=', null],
                                                    // ])->sum('jumlah');
                                                    // echo $jumlah_individu;
                                                    ?>
                                                </h5>
                                            </td>
                                        </tr>

                                        @if($kategori_pengunjung->enable_rombongan)
                                            <tr>
                                                <td style="vertical-align: middle;">Rombongan {{$kategori_pengunjung->nama}}</td><td style="vertical-align: middle;">
                                                    <h5>
                                                        <?php  
                                                        $sql = "SELECT
                                                                    COUNT(ticket.id) as jumlah
                                                                FROM
                                                                    ticket
                                                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                                                WHERE 
                                                                    kunjungan.rombongan = 1 AND 
                                                                    kunjungan.kategori_pengunjung_id = ". $kategori_pengunjung->id;
                                                        $result = DB::select( DB::raw($sql) );
                                                        echo number_format($result[0]->jumlah, 0, ',', '.');
                                                        // $jumlah_rombongan = (int) Kunjungan::where([
                                                        //     ['kategori_pengunjung_id', '=', $kategori_pengunjung->id],
                                                        //     ['rombongan', '!=', null],
                                                        // ])->sum('jumlah');
                                                        // echo $jumlah_rombongan;
                                                        ?>
                                                    </h5>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>


                            <table class="table table-bordered table-sm mb-4">
                                <thead>
                                    <tr class="bg-danger text-white">
                                        <th style="vertical-align: middle;">Pengunjung Website</th>
                                        <th style="vertical-align: middle;"><h5>{{Visitor::count()}}</h5></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr><td style="vertical-align: middle;">Hari Ini</td><td style="vertical-align: middle;"><h5>{{Visitor::whereDate('created_at', Carbon::today())->count()}}</h5></td></tr>
                                    <tr><td style="vertical-align: middle;">Kemarin</td><td style="vertical-align: middle;"><h5>{{Visitor::whereDate('created_at', Carbon::yesterday())->count()}}</h5></td></tr>
                                    <tr><td style="vertical-align: middle;">Minggu Ini</td><td style="vertical-align: middle;"><h5>{{Visitor::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count()}}</h5></td></tr>
                                    <tr><td style="vertical-align: middle;">Minggu Lalu</td><td style="vertical-align: middle;"><h5>{{Visitor::whereRaw("DATE_FORMAT(visitors.created_at, '%Y-%m-%d') <= DATE_SUB(CURDATE(), INTERVAL 1 WEEK) AND DATE_FORMAT(visitors.created_at, '%Y-%m-%d') >= DATE_SUB(CURDATE(), INTERVAL 2 WEEK)")->count()}}</h5></td></tr>
                                    <tr><td style="vertical-align: middle;">Bulan Ini</td><td style="vertical-align: middle;"><h5>{{Visitor::whereRaw("YEAR(visitors.created_at) = YEAR(CURDATE()) AND MONTH(visitors.created_at) = MONTH(CURDATE()) ")->count()}}</h5></td></tr>
                                    <tr><td style="vertical-align: middle;">Bulan Lalu</td><td style="vertical-align: middle;"><h5>{{Visitor::whereRaw("YEAR(visitors.created_at) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(visitors.created_at) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) ")->count()}}</h5></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection