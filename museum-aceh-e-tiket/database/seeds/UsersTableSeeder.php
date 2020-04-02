<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Fakhrurrazi Andi',
                'username' => 'fakhrurraziandi',
                'email' => 'fakhrurrazi.andi@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('untukapa'),
                'remember_token' => NULL,
                'app' => 'e-tiket',
                'role' => 'admin',
                'created_at' => '2019-09-28 11:21:47',
                'updated_at' => '2019-09-28 11:21:47',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'username' => 'admin_etiket',
                'email' => 'admin@e-tiket.museumaceh.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('untukapa'),
                'remember_token' => NULL,
                'app' => 'e-tiket',
                'role' => 'admin',
                'created_at' => '2019-11-05 04:41:38',
                'updated_at' => '2019-11-06 03:48:37',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Loket Tiket',
                'username' => 'loket_tiket',
                'email' => 'loket.tiket@e-tiket.museumaceh.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('untukapa'),
                'remember_token' => NULL,
                'app' => 'e-tiket',
                'role' => 'loket_tiket',
                'created_at' => '2019-11-05 04:42:33',
                'updated_at' => '2019-11-06 03:48:56',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Loket Jaga',
                'username' => 'loket_jaga',
                'email' => 'loket.jaga@e-tiket.museumaceh.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('untukapa'),
                'remember_token' => NULL,
                'app' => 'e-tiket',
                'role' => 'loket_jaga',
                'created_at' => '2019-11-05 04:43:16',
                'updated_at' => '2019-11-06 03:49:03',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Admin',
                'username' => 'admin_website',
                'email' => 'admin@museumaceh.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('untukapa'),
                'remember_token' => NULL,
                'app' => 'website',
                'role' => 'admin',
                'created_at' => '2019-11-06 04:46:42',
                'updated_at' => '2019-11-06 04:46:42',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Admin',
                'username' => 'admin_pengelolaan',
                'email' => 'admin@kelola.museumaceh.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('untukapa'),
                'remember_token' => NULL,
                'app' => 'kelola',
                'role' => 'admin',
                'created_at' => '2019-11-06 04:46:42',
                'updated_at' => '2019-11-06 04:46:42',
            ),
        ));


        
        
    }
}