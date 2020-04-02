<?php

namespace App\Http\Controllers;

use App\Kunjungan;
use App\KategoriPengunjung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('booking.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_kategori_pengunjung = KategoriPengunjung::all();
        return view('booking.create', compact('list_kategori_pengunjung'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori_pengunjung_id' => ['required'],
            // 'rombongan' => ['required'],
            'jumlah' => ['required'],
            // 'asal_pengunjung' => ['required'],
            'tarif' => ['required'],
            'total_pembayaran' => ['required'],
            'nama_kontak' => ['required'],
            'tanggal_kedatangan' => ['required'],
            'nomor_kontak' => ['required'],
            'email' => ['required'],
        ]);

        $kunjungan = Kunjungan::create([
            'kategori_pengunjung_id' => $request->get('kategori_pengunjung_id'),
            'rombongan' => $request->get('rombongan'),
            'jumlah' => $request->get('jumlah'),
            'asal_pengunjung' => $request->get('asal_pengunjung'),
            'tarif' => $request->get('tarif'),
            'total_pembayaran' => $request->get('total_pembayaran'),
            'tanggal_kedatangan' => $request->get('tanggal_kedatangan'),
            'nama_kontak' => $request->get('nama_kontak'),
            'nomor_kontak' => $request->get('nomor_kontak'),
            'email' => $request->get('email'),
            'booking_status' => true,
            'kode_booking' => substr(md5(rand(0, 100)), 0, 6)
        ]);

        


        return redirect()->back()->with('success', 'Booking Kunjungan anda telah berhasil di simpan, kami telah mengirimkan email berisi kode booking');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
