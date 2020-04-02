<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Kadisbudpar Aceh Terima 4 Sertifikat Warisan Budaya Tak Benda',
                'slug' => 'kadisbudpar-aceh-terima-4-sertifikat-warisan-budaya-tak-benda',
            'body' => '<p>Kementrian Pendidikan dan Kebudayaan melalui Direktoral Jenderal Kebudayaan menggelar malam apresiasi Warisan Budaya Tak Benda (WBTB) Indonesia 2019 yang berlangsung Selasa (8/10/2019) malam di Istora Gelora Bung Karno Senayan, Jakarta.</p>

<p>Dalam kegiatan yang ikut dihadiri Gubernur dan Bupati/Wali Kota se-Indonesia tersebut digelar prosesi penyerahan sertifikat WBTB Indonesia yang pada bulan Agustus lalu telah ditetapkan oleh tim ahli WBTB di Hotel Millennium Jakarta.</p>

<p>Aceh sendiri menerima 4 sertifikat karya budaya, yang diterima langsung Kepala Dinas Kebudayaan dan Pariwisata Aceh Jamaluddin mewakili Pelaksana Tugas Gubernur Aceh.</p>

<p>Kepala Dinas Kebudayaan dan Pariwisata Aceh Jamaluddin&ldquo;Aceh menerima 4 sertifikat karya budaya Aceh yang telah ditetapkan sebagai WBTB Indonesia yang diserahkan langsung oleh Menteri Dalam Negeri Tjahyo Kumolo, yakni berupa karya Sining, Gutel, Silat Pelintau, dan Memek,&rdquo; sebut Jamaluddin.</p>

<p>Dengan ditetapkan 4 karya budaya ini, maka jumlah karya budaya Aceh yang telah menjadi WBTB Indonesia berjumlah 34 karya budaya.</p>',
                'user_id' => 5,
                'status' => 'published',
                'category_id' => 2,
                'featured_image' => 'uploads/featured_images/5103c3584b063c431bd1268e9b5e76fb.jpg',
                'created_at' => '2019-11-01 20:05:51',
                'updated_at' => '2019-11-12 07:42:12',
            ),
        ));
        
        
    }
}