<?php 
// use SimpleSoftwareIO/QrCode\Facades\QrCode; 
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorHTML;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
?>


<style>
    p{
        font-size: 10px;
        padding:0;
        margin: 0;
    }
</style>

{{-- <p style="text-align: center;">
    <img src="{{asset('img/pancacita-bw-sm.png')}}" alt="" style="width: 35px;">
</p> --}}

<p style="text-align: center; margin-bottom: 0; font-weight: bold;">
    PEMERINTAH ACEH <br>
    DINAS KEBUDAYAAN DAN PARIWISATA ACEH <br>
    UPTD MUSEUM ACEH
</p>




<p style="text-align: center; padding-top: 0px; padding-bottom: 0px; margin-bottom: 15px; margin-top: 15px;" >
    {{-- <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(120)->generate("". $ticket->id)) !!} "> --}}
    <?php 
    $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
    echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode("". $ticket->kode, $generator::TYPE_CODE_128, 3)) . '">';
    ?>
</p>

<p style="text-align: center; margin-bottom: 10px; font-size: 20px;"><strong>{{$ticket->kode}}</strong></p>
<p style="text-align: center; margin-bottom: 10px; color: #fff; background-color: #000; width: 100px; margin-left: auto; margin-right: auto;"><strong>{{number_format($ticket->tarif, 0, ',', '.')}}</strong></p>
<p style="text-align: center; margin-bottom: 10px;"><strong>{{$ticket->kunjungan->kategori_pengunjung->nama}}</strong></p>

<p style="text-align: center; margin-bottom: 15px; font-size: 8px; font-weight: bold;">
    RETRIBUSI TEMPAT REKREASI <br>
    QANUN ACEH NOMOR 2 TAHUN 2016
</p>

<div style="text-align: center; vertical-align: center;">
    <img style="width: 21%; margin-right: 2%; margin-left: 2%;" src="./img/wonderfull-indonesia-sm-bw.png" alt="">
    <img style="width: 15%; margin-right: 2%; margin-left:" src="./img/museum-aceh-bw-sm.png" alt="">
    <img style="width: 15%; margin-right: 2%; margin-left: 2%;" src="./img/the-light-of-aceh-bw-sm.png" alt="">
</div>




