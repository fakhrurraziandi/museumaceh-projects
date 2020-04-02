<?php

namespace App\Http\Controllers\App;

use Mpdf\Mpdf;
use App\Ticket;
use App\Kunjungan;
use App\ActivityLog;
use App\KategoriPengunjung;
use Illuminate\Http\Request;
use App\Rules\ValidateKodeBooking;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class KunjunganController extends Controller
{

    public function submit_kode_booking(Request $request)
    {
        $request->validate([
            'kode_booking' => [
                'required', 
                new ValidateKodeBooking,
            ],
        ]);
        
        $kunjungan = Kunjungan::where([
            ['kode_booking', '=', $request->kode_booking]
        ])->firstOrFail();

        $kategori_pengunjung = $kunjungan->kategori_pengunjung;

        $tarif = 0;
        if($kunjungan->rombongan){
            $tarif = $kategori_pengunjung->tarif_rombongan;
        }else{
            $tarif = $kategori_pengunjung->tarif_individu;
        }

        for($i = 1; $i <= $kunjungan->jumlah; $i++){
            $data_ticket[] = [
                'kunjungan_id' => $kunjungan->id,
                'tarif' => $tarif,
                'created_at' => date('Y-m-d H:i:s')
            ];
        }

        Ticket::insert($data_ticket);

        $kunjungan = Kunjungan::find($kunjungan->id);

        $tickets = $kunjungan->tickets;

        return redirect()->route('app.kunjungan.show', $kunjungan->id);
    }

    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
		$offset = $request->filled('offset') ? $request->get('offset') : 0;
		$search = $request->filled('search') ? $request->get('search') : '';
		$sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'DESC';
        
        $list_kunjungan = Kunjungan::whereHas('tickets')->with(['kategori_pengunjung'])->search($search);
        $data['total'] = $list_kunjungan->count();


        $list_kunjungan->skip($offset);
        $list_kunjungan->limit($limit);
        $list_kunjungan->orderBy($sort, $order);

        $data['rows'] = $list_kunjungan->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('app.kunjungan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_kategori_pengunjung = KategoriPengunjung::all();
        return view('app.kunjungan.form', compact('list_kategori_pengunjung'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'kategori_pengunjung_id' => ['required'],
            // 'rombongan' => ['required'],
            'jumlah' => ['required'],
            // 'asal_pengunjung' => ['required'],
            'tarif' => ['required'],
            'total_pembayaran' => ['required'],
        ]);

        $kategori_pengunjung = KategoriPengunjung::find($request->get('kategori_pengunjung_id'));

        if($kategori_pengunjung){

            $rombongan = false;

            if($kategori_pengunjung->enable_rombongan && $request->get('jumlah') > 10){
                $rombongan = true;
            }
            
            $kunjungan = Kunjungan::create([
                'kategori_pengunjung_id' => $request->get('kategori_pengunjung_id'),
                'rombongan' => $rombongan,
                'jumlah' => $request->get('jumlah'),
                'asal_pengunjung' => $request->get('asal_pengunjung'),
                'total_pembayaran' => $request->get('total_pembayaran'),
            ]);
            
            $data_ticket = [];
    
            for($i = 1; $i <= $kunjungan->jumlah; $i++){
                $data_ticket[] = [
                    'kunjungan_id' => $kunjungan->id,
                    'tarif' => $request->get('tarif'),
                    'created_at' => date('Y-m-d H:i:s')
                ];
            }
    
            Ticket::insert($data_ticket);
    
            $kunjungan = Kunjungan::find($kunjungan->id);

            ActivityLog::create([
                'activity' => Auth::user()->name . ' membuat kunjungan/ticket baru',
                'data' => $kunjungan->toJson(),
                'user_id' => Auth::user()->id
            ]);
    
            $tickets = $kunjungan->tickets;

            
    
        }

        
        return redirect()->route('app.kunjungan.show', $kunjungan->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kunjungan $kunjungan)
    {
        // return $kunjungan;
        $list_kategori_pengunjung = KategoriPengunjung::all();
        return view('app.kunjungan.show', compact('list_kategori_pengunjung', 'kunjungan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kunjungan $kunjungan)
    {
        // return $kunjungan;
        $list_kategori_pengunjung = KategoriPengunjung::all();
        return view('app.kunjungan.form', compact('list_kategori_pengunjung', 'kunjungan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kunjungan $kunjungan)
    {
        $request->validate([
            'kategori_pengunjung_id' => ['required'],
            // 'rombongan' => ['required'],
            'jumlah' => ['required'],
            // 'asal_pengunjung' => ['required'],
            'tarif' => ['required'],
            'total_pembayaran' => ['required'],
        ]);

        $kunjungan->update([
            'kategori_pengunjung_id' => $request->get('kategori_pengunjung_id'),
            'rombongan' => $request->get('rombongan'),
            'jumlah' => $request->get('jumlah'),
            'asal_pengunjung' => $request->get('asal_pengunjung'),
            'tarif' => $request->get('tarif'),
            'total_pembayaran' => $request->get('total_pembayaran'),
        ]);

        return redirect()->route('app.kunjungan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kunjungan $kunjungan)
    {
        $kunjungan->delete();

        return redirect()->route('app.kunjungan.index');
    }

    public function cetak_ticket(Kunjungan $kunjungan)
    {
        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            // 'format' => [80, 100],
            'format' => [80, 81],
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_top' => 5,
            'margin_bottom' => 5,
        ]);

        for($i = 0; $i < $kunjungan->tickets->count(); $i++){

            $ticket = $kunjungan->tickets[$i];
            $template = view('app.kunjungan.ticket', compact('ticket'))->render();

            
            $mpdf->WriteHTML($template);
            if(($kunjungan->tickets->count() - 1) !== $i){
                $mpdf->addPage();
            }
            
        }
        
        
        
        $mpdf->Output();
    }
}
