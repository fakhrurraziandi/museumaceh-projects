<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Berita',
                'slug' => 'berita',
                'description' => '<p>Ini adalah kategori berita&nbsp;</p>',
                'created_at' => '2019-11-01 12:54:00',
                'updated_at' => '2019-11-02 12:32:55',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Event dan Pameran',
                'slug' => 'event-dan-pameran',
                'description' => '<p>Ini adalah kategori Event dan Pameran</p>',
                'created_at' => '2019-11-01 12:54:12',
                'updated_at' => '2019-11-02 12:38:02',
            ),
        ));
        
        
    }
}