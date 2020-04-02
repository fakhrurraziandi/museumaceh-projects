<?php 

use App\KategoriPengunjung;

?>
@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row mb-4">
            <div class="col-sm-6">
                <h5><div class="date"></div></h5>
            </div>
            <div class="col-sm-6 text-md-right">
                <h5><span class="clock"></span></h5>
            </div>
        </div>

        <script>
            $(function(){

                function runClock(){

                    var months = [
                        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                    ];

                    var days = [
                        'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu'
                    ];

                    var date = new Date();

                    var ampm = date.getHours() < 12 ? 'AM' : 'PM';

                    var hours = date.getHours() == 0
                                    ? 12
                                    : date.getHours() > 12
                                        ? date.getHours() - 12
                                        : date.getHours();

                    var minutes = date.getMinutes() < 10 
                                    ? '0' + date.getMinutes() 
                                    : date.getMinutes();
                    
                    var seconds = date.getSeconds() < 10 
                                    ? '0' + date.getSeconds() 
                                    : date.getSeconds();

                    var dayOfWeek = days[date.getDay()];
                    var month = months[date.getMonth()];
                    var day = date.getDate();
                    var year = date.getFullYear();


                    var dateString = dayOfWeek + ', ' + month + ' ' + day + ', ' + year;

                    var clockString = hours + ':' + minutes + ':' + seconds + ' ' + ampm; 
                    
                    $('.clock').html(clockString)
                    $('.date').html(dateString)
                }

                setInterval(runClock, 1000)
            });
        </script>

        <div class="row mb-4">
            <div class="col-6 col-sm-3 mb-4">
                <div class="text-right px-4 py-3 shadow-sm" style="background-color: #C4DF9C;">
                    <h3 class="h6 font-weight-light">Hari Ini</h3>
                    <h4 class="h1">
                        <?php  
                        $sql = "SELECT
                                    COUNT(ticket.id) as jumlah
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE 
                                    DATE_FORMAT(ticket.created_at, '%Y-%m-%d') = CURDATE()";
                        $result = DB::select( DB::raw($sql) );
                        echo number_format($result[0]->jumlah, 0, ',', '.');
                        ?>
                    </h4>
                </div>
            </div>

            <div class="col-6 col-sm-3 mb-4">
                <div class="text-right px-4 py-3 shadow-sm" style="background-color: #A3D29C;">
                    <h3 class="h6 font-weight-light">Minggu Ini</h3>
                    <h4 class="h1">
                        <?php  
                        $sql = "SELECT
                                    COUNT(ticket.id) as jumlah
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE 
                                    YEARWEEK(ticket.created_at) = YEARWEEK(CURDATE())";
                        $result = DB::select( DB::raw($sql) );
                        echo number_format($result[0]->jumlah, 0, ',', '.');
                        ?>
                    </h4>
                </div>
            </div>

            <div class="col-6 col-sm-3 mb-4">
                <div class="text-right px-4 py-3 shadow-sm" style="background-color: #6DCFF6;">
                    <h3 class="h6 font-weight-light">Kemarin</h3>
                    <h4 class="h1">
                        <?php  
                        $sql = "SELECT
                                    COUNT(ticket.id) as jumlah
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE 
                                    DATE_FORMAT(ticket.created_at, '%Y-%m-%d') =  DATE_SUB(CURDATE(), INTERVAL 1 DAY)";
                        $result = DB::select( DB::raw($sql) );
                        echo number_format($result[0]->jumlah, 0, ',', '.');
                        ?>
                    </h4>
                </div>
            </div>

            <div class="col-6 col-sm-3 mb-4">
                <div class="text-right px-4 py-3 shadow-sm" style="background-color: #7DA7D9;">
                    <h3 class="h6 font-weight-light">Minggu Lalu</h3>
                    <h4 class="h1">
                        <?php  
                        $sql = "SELECT
                                    COUNT(ticket.id) as jumlah
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE 
                                    DATE_FORMAT(ticket.created_at, '%Y-%m-%d') <= DATE_SUB(CURDATE(), INTERVAL 1 WEEK) AND
                                    DATE_FORMAT(ticket.created_at, '%Y-%m-%d') >= DATE_SUB(CURDATE(), INTERVAL 2 WEEK)";

                        $result = DB::select( DB::raw($sql) );
                        echo number_format($result[0]->jumlah, 0, ',', '.');
                        ?>
                    </h4>
                </div>
            </div>

            <div class="col-6 col-sm-3 mb-4">
                <div class="text-right px-4 py-3 shadow-sm" style="background-color: #82CA9C;">
                    <h3 class="h6 font-weight-light">Bulan Ini</h3>
                    <h4 class="h1">
                        <?php  
                        $sql = "SELECT
                                    COUNT(ticket.id) as jumlah
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE 
                                    YEAR(ticket.created_at) = YEAR(CURDATE()) AND MONTH(ticket.created_at) = MONTH(CURDATE()) ";
                        $result = DB::select( DB::raw($sql) );
                        echo number_format($result[0]->jumlah, 0, ',', '.');
                        ?>
                    </h4>
                </div>
            </div>

            <div class="col-6 col-sm-3 mb-4">
                <div class="text-right px-4 py-3 shadow-sm" style="background-color: #7ACCC8;">
                    <h3 class="h6 font-weight-light">Tahun Ini</h3>
                    <h4 class="h1">
                        <?php  
                        $sql = "SELECT
                                    COUNT(ticket.id) as jumlah
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE 
                                    YEAR(ticket.created_at) = YEAR(CURDATE()) ";
                        $result = DB::select( DB::raw($sql) );
                        echo number_format($result[0]->jumlah, 0, ',', '.');
                        ?>
                    </h4>
                </div>
            </div>

            <div class="col-6 col-sm-3 mb-4">
                <div class="text-right px-4 py-3 shadow-sm" style="background-color: #8493CA;">
                    <h3 class="h6 font-weight-light">Bulan Lalu</h3>
                    <h4 class="h1">
                        <?php  
                        $sql = "SELECT
                                    COUNT(ticket.id) as jumlah
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE YEAR(ticket.created_at) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
                                AND MONTH(ticket.created_at) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) ";
                        $result = DB::select( DB::raw($sql) );
                        echo number_format($result[0]->jumlah, 0, ',', '.');
                        ?>
                    </h4>
                </div>
            </div>

            <div class="col-6 col-sm-3 mb-4">
                <div class="text-right px-4 py-3 shadow-sm" style="background-color: #A286C0;">
                    <h3 class="h6 font-weight-light">Tahun Lalu</h3>
                    <h4 class="h1">
                        <?php  
                        $sql = "SELECT
                                    COUNT(ticket.id) as jumlah
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE 
                                    YEAR(ticket.created_at) = YEAR(CURDATE() - INTERVAL 1 YEAR) ";
                        $result = DB::select( DB::raw($sql) );
                        echo number_format($result[0]->jumlah, 0, ',', '.');
                        ?>
                    </h4>
                </div>
            </div>
        </div>


        <div class="row mb-4">
            <div class="col-sm-12 text-center">
                <h5>Statistik Pendapatan</h5>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-6 col-sm-3 mb-4">
                <div class="text-right px-4 py-3 shadow-sm" style="background-color: #CCCCCC;">
                    <h3 class="h6 font-weight-light">Hari Ini</h3>
                    <h4 class="h1">
                        <?php  
                        $sql = "SELECT
                                    SUM(ticket.tarif) as jumlah
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE 
                                    DATE_FORMAT(ticket.created_at, '%Y-%m-%d') = CURDATE()";
                        $result = DB::select( DB::raw($sql) );
                        echo 'Rp. '. number_format($result[0]->jumlah, 0, ',', '.');
                        ?>
                    </h4>
                </div>
            </div>

            <div class="col-6 col-sm-3 mb-4">
                <div class="text-right px-4 py-3 shadow-sm" style="background-color: #CCCCCC;">
                    <h3 class="h6 font-weight-light">Minggu Ini</h3>
                    <h4 class="h1">
                        <?php  
                        $sql = "SELECT
                                    SUM(ticket.tarif) as jumlah
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE 
                                    YEARWEEK(ticket.created_at) = YEARWEEK(CURDATE())";
                        $result = DB::select( DB::raw($sql) );
                        echo 'Rp. '. number_format($result[0]->jumlah, 0, ',', '.');
                        ?>
                    </h4>
                </div>
            </div>

            <div class="col-6 col-sm-3 mb-4">
                <div class="text-right px-4 py-3 shadow-sm" style="background-color: #CCCCCC;">
                    <h3 class="h6 font-weight-light">Bulan Ini</h3>
                    <h4 class="h1">
                        <?php  
                        $sql = "SELECT
                                    SUM(ticket.tarif) as jumlah
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE 
                                    YEAR(ticket.created_at) = YEAR(CURDATE()) AND MONTH(ticket.created_at) = MONTH(CURDATE()) ";
                        $result = DB::select( DB::raw($sql) );
                        echo 'Rp. '. number_format($result[0]->jumlah, 0, ',', '.');
                        ?>
                    </h4>
                </div>
            </div>

            <div class="col-6 col-sm-3 mb-4">
                <div class="text-right px-4 py-3 shadow-sm" style="background-color: #CCCCCC;">
                    <h3 class="h6 font-weight-light">Tahun Ini</h3>
                    <h4 class="h1">
                        <?php  
                        $sql = "SELECT
                                    SUM(ticket.tarif) as jumlah
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE 
                                    YEAR(ticket.created_at) = YEAR(CURDATE()) ";
                        $result = DB::select( DB::raw($sql) );
                        echo 'Rp. '. number_format($result[0]->jumlah, 0, ',', '.');
                        ?>
                    </h4>
                </div>
            </div>
        </div>



        <div class="row mb-4">
            <div class="col-sm-12 text-center">
                <h5>Kunjungan Berdasarkan Kategori</h5>
            </div>
        </div>


        
        <div class="row mb-4">

            <?php  
            $array_custom_color = [
                '#FFF79A',
                '#7CC576',
                '#F78E57',
                '#6DCFF6',
                '#F06EAA'
            ];

            $array_index_color = [
                'Tamu Asing' => '#A286C0',
                'Anak-Anak' => '#7DA7D9',
                'Dewasa' => '#A3D29C',
            ];
            $array_index_color_rombongan = [
                'Tamu Asing' => '#8493CA',
                'Anak-Anak' => '#6DCFF6',
                'Dewasa' => '#C4DF9C',
            ];

            $i = 0;
            ?>
            @foreach(KategoriPengunjung::all() as $kategori_pengunjung)

                <div class="col-6 col-sm mb-4">
                    <div class="text-right px-4 py-3 shadow-sm" style="background-color: {{$array_index_color[$kategori_pengunjung->nama]}}">
                        <h3 class="h6 font-weight-light">{{$kategori_pengunjung->nama}}</h3>
                        <h4 class="h1">
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
                            ?>
                        </h4>
                    </div>
                </div>

                @if($kategori_pengunjung->enable_rombongan)

                    <div class="col-6 col-sm mb-4">
                        <div class="text-right px-4 py-3 shadow-sm" style="background-color: {{$array_index_color_rombongan[$kategori_pengunjung->nama]}}">
                            <h3 class="h6 font-weight-light">Rombongan {{$kategori_pengunjung->nama}}</h3>
                            <h4 class="h1">
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
                                ?>
                            </h4>
                        </div>

                   
                    </div>
                @endif
                <?php $i++; ?>
            @endforeach
        </div>
    </div>
@endsection