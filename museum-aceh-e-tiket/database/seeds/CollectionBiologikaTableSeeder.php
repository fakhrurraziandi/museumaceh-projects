<?php

use Illuminate\Database\Seeder;

class CollectionBiologikaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('collection_biologika')->delete();
        
        \DB::table('collection_biologika')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_latin' => 'Panthera Tigris Sumatrae',
                'kingdom' => 'Animalia',
                'phylum' => 'Chordata',
                'class' => 'Mammalia',
                'order' => 'Carnivora',
                'sub_order' => 'Feliformia',
                'famili' => 'Felidae',
                'sub_famili' => 'Pantherinae',
                'genus' => 'Panthera',
                'spesies' => 'Panthera Tigris',
                'sub_species' => 'Panthera Tigris Sumatrae',
                'habitat' => 'Hutan Hujan Tropis',
                'endemik' => 0,
                'status' => 'Dilindungi',
                'warna' => 'Orannye, Coklat, Putih, Kuning',
                'teknik_pengawetan' => NULL,
                'petugas_preparasi' => NULL,
                'created_at' => '2020-01-09 13:44:20',
                'updated_at' => '2020-01-09 13:46:49',
            ),
        ));
        
        
    }
}