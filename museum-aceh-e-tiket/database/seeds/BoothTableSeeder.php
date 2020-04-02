<?php

use Illuminate\Database\Seeder;

class BoothTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('booth')->delete();
        
        \DB::table('booth')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Booth A',
                'deskripsi' => NULL,
                'created_at' => '2020-02-14 04:46:39',
                'updated_at' => '2020-02-14 04:46:55',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Booth B',
                'deskripsi' => NULL,
                'created_at' => '2020-02-14 04:46:49',
                'updated_at' => '2020-02-14 04:46:49',
            ),
        ));
        
        
    }
}