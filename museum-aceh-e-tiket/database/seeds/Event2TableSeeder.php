<?php

use Illuminate\Database\Seeder;

class Event2TableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event2')->delete();
        
        \DB::table('event2')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_kegiatan' => 'Hari Museum Nasional 2019',
                'jenis' => 'Event',
                'tanggal_mulai' => '2019-10-12',
                'tanggal_selesai' => '2019-10-13',
                'penyelenggara' => 'Disbudpar Aceh',
                'created_at' => '2020-01-07 13:06:39',
                'updated_at' => '2020-01-07 13:06:39',
            ),
        ));
        
        
    }
}