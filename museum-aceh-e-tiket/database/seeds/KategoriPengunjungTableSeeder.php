<?php

use Illuminate\Database\Seeder;

class KategoriPengunjungTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategori_pengunjung')->delete();
        
        \DB::table('kategori_pengunjung')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Tamu Asing',
                'tarif_individu' => 5000,
                'enable_rombongan' => 0,
                'tarif_rombongan' => 4000,
                'prefix_code' => 'TA',
                'order' => 3,
                'created_at' => NULL,
                'updated_at' => '2019-11-04 19:00:17',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Anak-Anak',
                'tarif_individu' => 2000,
                'enable_rombongan' => 1,
                'tarif_rombongan' => 1000,
                'prefix_code' => 'AA',
                'order' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Dewasa',
                'tarif_individu' => 3000,
                'enable_rombongan' => 1,
                'tarif_rombongan' => 2000,
                'prefix_code' => 'DW',
                'order' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}