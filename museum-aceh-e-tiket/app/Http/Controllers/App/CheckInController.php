<?php

namespace App\Http\Controllers\App;

use App\Booth;
use App\Ticket;
use App\ActivityLog;
use App\TicketCheckin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CheckInController extends Controller
{
    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
		$offset = $request->filled('offset') ? $request->get('offset') : 0;
		$search = $request->filled('search') ? $request->get('search') : '';
		$sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'DESC';
        
        $list_ticket = Ticket::whereHas('booth')->with(['kunjungan.kategori_pengunjung', 'booth'])->search($search);
        $data['total'] = $list_ticket->count();


        $list_ticket->skip($offset);
        $list_ticket->limit($limit);
        $list_ticket->orderBy($sort, $order);

        $data['rows'] = $list_ticket->get();

        return $data;
    }

    public function index()
    {
        return view('app.check_in.index');
    }

    public function find(Request $request)
    {
        
        

        $validator = Validator::make($request->all(), [
            'id' => [ 'required' ],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal Checkin'
            ]);
        }
        
        $kode = $request->id;

        $sql = "SELECT
                    ticket.id,
                    ticket.kunjungan_id,
                    ticket.tarif,
                    ticket.qrcode,
                    ticket.created_at,
                    ticket.updated_at,
                    kategori_pengunjung.prefix_code,
                    CONCAT(kategori_pengunjung.prefix_code, ticket.id) AS kode
                FROM
                    ticket
                INNER JOIN kunjungan ON ticket.kunjungan_id = kunjungan.id
                INNER JOIN kategori_pengunjung ON kunjungan.kategori_pengunjung_id = kategori_pengunjung.id
                
                where CONCAT(kategori_pengunjung.prefix_code, ticket.id) = '$kode' ";

        $ticket = DB::select( DB::raw($sql) );

        if($ticket){

            $ticket = $ticket[0];
            $ticket = Ticket::find($ticket->id);
            $checked_id_booth_ids = $ticket->booth_ids;
            $booth_id = request()->get('booth_id');
            $booth = Booth::find($booth_id);

            if(in_array($booth_id, $checked_id_booth_ids)){
                return response()->json([
                    'status' => false,
                    'data' => $ticket,
                    'message' => 'Tiket dengan kode '. $ticket->kode.' sudah pernah check in di booth '. $booth->nama
                ]);
            }

            TicketCheckin::create([
                'ticket_id' => $ticket->id,
                'booth_id' => $booth_id
            ]);

            ActivityLog::create([
                'activity' => 'User '. Auth::user()->name . ' melakukan check in ticket dengan kode ticket '. $ticket->kode .'  di booth '. $booth->nama,
                'data' => $ticket->toJson(),
                'user_id' => Auth::user()->id
            ]);

            return response([
                'status' => true,
                'data' => $ticket,
                'message' => 'Berhasil check in.'
            ]);
        }else{
            return response([
                'status' => false,
                'message' => 'Gagal check in.'
            ]);
        }
    }
}
