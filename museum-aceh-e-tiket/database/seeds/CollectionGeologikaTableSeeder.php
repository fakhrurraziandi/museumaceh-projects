<?php

use Illuminate\Database\Seeder;

class CollectionGeologikaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('collection_geologika')->delete();
        
        \DB::table('collection_geologika')->insert(array (
            0 => 
            array (
                'id' => 2,
                'mineral_utama' => NULL,
                'mineral_sekunder' => NULL,
                'senyawa_kimia' => NULL,
                'jenis' => NULL,
                'tekstur' => NULL,
                'struktur' => NULL,
                'proses_pembentukan' => NULL,
                'warna' => NULL,
                'karat' => NULL,
                'created_at' => '2020-01-07 10:56:11',
                'updated_at' => '2020-01-07 10:56:11',
            ),
            1 => 
            array (
                'id' => 3,
                'mineral_utama' => NULL,
                'mineral_sekunder' => NULL,
                'senyawa_kimia' => NULL,
                'jenis' => NULL,
                'tekstur' => NULL,
                'struktur' => NULL,
                'proses_pembentukan' => NULL,
                'warna' => NULL,
                'karat' => NULL,
                'created_at' => '2020-01-07 10:58:49',
                'updated_at' => '2020-01-07 10:58:49',
            ),
            2 => 
            array (
                'id' => 4,
                'mineral_utama' => NULL,
                'mineral_sekunder' => NULL,
                'senyawa_kimia' => NULL,
                'jenis' => NULL,
                'tekstur' => NULL,
                'struktur' => NULL,
                'proses_pembentukan' => NULL,
                'warna' => NULL,
                'karat' => NULL,
                'created_at' => '2020-01-07 11:02:37',
                'updated_at' => '2020-01-07 11:02:37',
            ),
            3 => 
            array (
                'id' => 5,
                'mineral_utama' => NULL,
                'mineral_sekunder' => NULL,
                'senyawa_kimia' => NULL,
                'jenis' => NULL,
                'tekstur' => NULL,
                'struktur' => NULL,
                'proses_pembentukan' => NULL,
                'warna' => NULL,
                'karat' => NULL,
                'created_at' => '2020-01-07 11:04:52',
                'updated_at' => '2020-01-07 11:04:52',
            ),
            4 => 
            array (
                'id' => 6,
                'mineral_utama' => NULL,
                'mineral_sekunder' => NULL,
                'senyawa_kimia' => NULL,
                'jenis' => NULL,
                'tekstur' => NULL,
                'struktur' => NULL,
                'proses_pembentukan' => NULL,
                'warna' => NULL,
                'karat' => NULL,
                'created_at' => '2020-01-07 11:06:53',
                'updated_at' => '2020-01-07 11:06:53',
            ),
            5 => 
            array (
                'id' => 7,
                'mineral_utama' => 'Serpentenit',
                'mineral_sekunder' => NULL,
                'senyawa_kimia' => 'C21H20N2O3',
                'jenis' => 'Batuan Metamorf',
                'tekstur' => NULL,
                'struktur' => NULL,
                'proses_pembentukan' => NULL,
                'warna' => 'Hijau, Coklat, Putih',
                'karat' => NULL,
                'created_at' => '2020-01-09 13:42:01',
                'updated_at' => '2020-01-09 13:44:06',
            ),
        ));
        
        
    }
}