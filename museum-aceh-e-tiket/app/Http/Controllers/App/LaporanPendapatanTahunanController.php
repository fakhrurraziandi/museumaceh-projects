<?php

namespace App\Http\Controllers\App;

use Mpdf\Mpdf;
use Illuminate\Http\Request;
use Mpdf\Config\FontVariables;
use Mpdf\Config\ConfigVariables;
use App\Http\Controllers\Controller;

class LaporanPendapatanTahunanController extends Controller
{
    public function index()
    {
        return view('app.laporan_pendapatan_tahunan.index');
    }

    public function pdf()
    {

        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new Mpdf([
            'fontDir' => array_merge($fontDirs, [
                public_path('fonts/Roboto')
            ]),
            'fontdata' => $fontData + [
                'Roboto' => [
                    'R' => 'Roboto-Regular.ttf',
                    'I' => 'Roboto-Italic.ttf',
                ]
            ],
            'default_font' => 'Roboto',
            'mode' => 'utf-8',
            'orientation' => 'L'
        ]);


        $html = view('app.laporan_pendapatan_tahunan.pdf')->render();
       
        $mpdf->WriteHTML($html);

        $mpdf->Output();
    }
}
