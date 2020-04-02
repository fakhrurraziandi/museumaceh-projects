
<?php  

use App\KategoriPengunjung;

$tahun = request()->tahun;
$list_bulan = [
    1 => 'Januari',
    'Februari',
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

$list_kategori_pengunjung = KategoriPengunjung::all();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h3 style="text-align: center; font-weight: light;">
        LAPORAN KUNJUNGAN MUSEUM ACEH
        <br>
        TAHUN {{$tahun}}
    </h3> --}}

    <div style="text-align: left; font-weight: bold;">
        <img src="./img/pancacita-color-sm.jpeg" alt="">
    </div>



    <p style="font-size: 80%; text-indent: 50px;">Dengan ini kami sampaikan data laporan kunjungan UPTD. Museum Aceh Selama 2019, yang di unduh dari aplikasi e-ticket Museum Aceh.</p>

    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; font-size: 80%;">
        <thead>
            <tr>
                <th style="width: 30px;">No</th>
                <th>Bulan</th>
                @foreach($list_kategori_pengunjung as $kategori_pengunjung)
                    <th style="width: 100px;">{{$kategori_pengunjung->nama}}</th>
                    <th style="width: 100px;">Rombongan {{$kategori_pengunjung->nama}}</th>
                @endforeach
                <th style="width: 100px;">Kunjungan/Bulan</th>
            </tr>
        </thead>

        <tbody>
            @foreach($list_bulan as $bulan_angka => $bulan_text)
                <tr>
                    <td>{{$bulan_angka}}</td>
                    <td>{{$bulan_text}}</td>
                    @foreach($list_kategori_pengunjung as $kategori_pengunjung)
                        <td>
                            <?php  
                            $sql = "SELECT
                                        COUNT(ticket.id) as jumlah_kunjungan
                                    FROM
                                        ticket
                                    INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                    WHERE 
                                        (kunjungan.rombongan IS NULL OR kunjungan.rombongan = 0) AND 
                                        kunjungan.kategori_pengunjung_id = ". $kategori_pengunjung->id ." AND 
                                        MONTH(ticket.created_at) = ". $bulan_angka;
                            $result = DB::select( DB::raw($sql) );
                            echo $result[0]->jumlah_kunjungan;
                            ?>
                        </td>
                        <td>
                            <?php  
                            $sql = "SELECT
                                        COUNT(ticket.id) as jumlah_kunjungan
                                    FROM
                                        ticket
                                    INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                    WHERE 
                                        kunjungan.rombongan = 1 AND 
                                        kunjungan.kategori_pengunjung_id = ". $kategori_pengunjung->id ." AND 
                                        MONTH(ticket.created_at) = ". $bulan_angka;
                            $result = DB::select( DB::raw($sql) );
                            echo $result[0]->jumlah_kunjungan;
                            ?>
                        </td>
                        
                    @endforeach
                    
                    <td>
                        <?php  
                        $sql = "SELECT
                                    COUNT(ticket.id) as jumlah_kunjungan
                                FROM
                                    ticket
                                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                                WHERE 
                                    MONTH(ticket.created_at) = ". $bulan_angka;
                        $result = DB::select( DB::raw($sql) );
                        echo $result[0]->jumlah_kunjungan;
                        ?>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p style="font-size: 80%; text-indent: 50px;">Laporan kunjungan UPTD. Museum Aceh inni laporan resmi berdasarkan data kunjungan selama tahun {{$tahun}}. Demikian laporan ini kami sampaikan, agar dapat digunakan sesuai dengan kebutuhan. Terimakasih.   </p>

    <table border="0" style="width: 100%; font-size: 80%;">
        <tr>
            <td></td>
            <td style="width: 250px; text-align: center;">
                Banda Aceh, 10 Januari 2020 <br>
                Kepala UPTD. Museum Aceh <br><br><br><br>
                Mudafarsyah <br>
                Nip. 
            </td>
        </tr>
    </table>
    
</body>
</html>


