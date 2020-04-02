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


<style>
    *{
        font-family: Roboto;
    }

    @page {
        margin: 2% 5%;
    }
</style>

<table style="width: 100%;">
    <tr>
        <td style="width: 7%;">
            <img src="./img/pancacita-color-sm.jpg" alt="" style="margin-right: 20px; width: 90px;">
        </td>
        <td style="width: 93%;">
            <h4 style="font-weight: bold;">
                PEMERINTAH ACEH <br>
                DINAS KEBUDAYAAN DAN PARIWISATA ACEH<br>
                UPTD MUSEUM ACEH
            </h4>
            <p style="font-size: 80%;">
                Jl. Sultan Alaidin Mahmudsyah No. 10, Peuniti, Kecamatan Baiturrahman, Kota Banda Aceh 23116 <br>
                Telp: (0651)  21121. Fax: (0651) 22211, Website: museum.acehprov.go.id
            </p>
        </td>
    </tr>
</table>

<hr>

<h5 style="text-align: center; font-weight: bold; margin-bottom: 0px;">
    LAPORAN KUNJUNGAN MUSEUM ACEH
    <br>
    TAHUN {{$tahun}}
</h5>

<p style="font-size: 80%; text-indent: 50px;">Dengan ini kami sampaikan data laporan kunjungan UPTD Museum Aceh Selama {{$tahun}}, yang di unduh dari aplikasi e-ticket Museum Aceh.</p>

<table border="1" cellspacing="0" cellpadding="5" style="width: 100%; font-size: 70%;">
    <thead>
        <tr>
            <th style="width: 30px;">No</th>
            <th>Bulan</th>
            @foreach($list_kategori_pengunjung as $kategori_pengunjung)
                <th style="width: 100px;">{{$kategori_pengunjung->nama}}</th>
                @if($kategori_pengunjung->enable_rombongan)
                    <th style="width: 100px;">Rombongan {{$kategori_pengunjung->nama}}</th>
                @endif
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
                                    YEAR(ticket.created_at) = ". $tahun . " AND 
                                    MONTH(ticket.created_at) = ". $bulan_angka;
                        $result = DB::select( DB::raw($sql) );
                        echo $result[0]->jumlah_kunjungan ? number_format($result[0]->jumlah_kunjungan, 0, ',', '.') : '-';
                        ?>
                    </td>
                    @if($kategori_pengunjung->enable_rombongan)
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
                                        YEAR(ticket.created_at) = ". $tahun . " AND 
                                        MONTH(ticket.created_at) = ". $bulan_angka;
                            $result = DB::select( DB::raw($sql) );
                            echo $result[0]->jumlah_kunjungan ? number_format($result[0]->jumlah_kunjungan, 0, ',', '.') : '-';
                            ?>
                        </td>
                    @endif
                   
                @endforeach
                
                <td>
                    <?php  
                    $sql = "SELECT
                                COUNT(ticket.id) as jumlah_kunjungan
                            FROM
                                ticket
                            INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                            WHERE 
                                YEAR(ticket.created_at) = ". $tahun . " AND 
                                MONTH(ticket.created_at) = ". $bulan_angka;
                    $result = DB::select( DB::raw($sql) );
                    echo $result[0]->jumlah_kunjungan ? number_format($result[0]->jumlah_kunjungan, 0, ',', '.') : '-';
                    ?>
                </td>
            </tr>
        @endforeach

        <tr>
            <td></td>
            <td>Jumlah:</td>
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
                                YEAR(ticket.created_at) = ". $tahun ;
                    $result = DB::select( DB::raw($sql) );
                    echo $result[0]->jumlah_kunjungan ? number_format($result[0]->jumlah_kunjungan, 0, ',', '.') : '-';
                    ?>
                </td>
                @if($kategori_pengunjung->enable_rombongan)
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
                                    YEAR(ticket.created_at) = ". $tahun ;
                        $result = DB::select( DB::raw($sql) );
                        echo $result[0]->jumlah_kunjungan ? number_format($result[0]->jumlah_kunjungan, 0, ',', '.') : '-';
                        ?>
                    </td>
                @endif
            @endforeach

            <td>
                <?php  
                $sql = "SELECT
                            COUNT(ticket.id) as jumlah_kunjungan
                        FROM
                            ticket
                        INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                        WHERE 
                            YEAR(ticket.created_at) = ". $tahun ;
                $result = DB::select( DB::raw($sql) );
                echo $result[0]->jumlah_kunjungan ? number_format($result[0]->jumlah_kunjungan, 0, ',', '.') : '-';
                ?>
            </td>
        </tr>
    </tbody>


</table>

<p style="font-size: 80%; text-indent: 50px;">Laporan kunjungan UPTD Museum Aceh ini adalah laporan resmi berdasarkan data kunjungan selama tahun {{$tahun}}. Demikian laporan ini kami sampaikan, agar dapat digunakan sesuai dengan kebutuhan. Terima kasih.   </p>

<table border="0" style="width: 100%; font-size: 80%;">
    <tr>
        <td style="width: 250px; text-align: center;">
            &nbsp;<br />
            &nbsp;<br />
            Pengumpul Retribusi <br><br><br><br>
            Ika Irdayanti <br>
            Nip. 198612022012122002
        </td>
        <td></td>
        <td style="width: 250px; text-align: center;">
            Banda Aceh, <?php echo date('j') . ' '. ucwords($list_bulan[date('n')]) . ' '. date('Y') ?> <br>
            Mengetahui,<br />
            Kepala UPTD. Museum Aceh <br><br><br><br>
            Muda Farsyah, S.Sos <br>
            Nip. 198202222006041005
        </td>
    </tr>
</table>