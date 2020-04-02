<?php

use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('collections')->delete();
        
        \DB::table('collections')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nama' => 'Serpentenit',
                'nomor_inventaris' => '010000300',
                'tanggal_inventaris' => NULL,
                'tanggal_pengadaan' => NULL,
                'kondisi' => NULL,
                'ukuran_berat' => NULL,
                'ukuran_panjang' => NULL,
                'ukuran_lebar' => NULL,
                'ukuran_tinggi' => NULL,
                'cara_perolehan' => NULL,
                'tempat_perolehan' => NULL,
                'lokasi_penempatan' => NULL,
                'keterangan_penempatan' => NULL,
                'nama_pencatat' => NULL,
                'asal_usul' => NULL,
                'kode_aset' => NULL,
                'deskripsi_singkat' => NULL,
                'collectionable_type' => 'App\\CollectionGeologika',
                'collectionable_id' => 2,
                'saved' => 0,
                'published' => 1,
                'created_at' => '2020-01-07 10:56:11',
                'updated_at' => '2020-01-07 10:58:44',
            ),
            1 => 
            array (
                'id' => 3,
                'nama' => NULL,
                'nomor_inventaris' => NULL,
                'tanggal_inventaris' => NULL,
                'tanggal_pengadaan' => NULL,
                'kondisi' => NULL,
                'ukuran_berat' => NULL,
                'ukuran_panjang' => NULL,
                'ukuran_lebar' => NULL,
                'ukuran_tinggi' => NULL,
                'cara_perolehan' => NULL,
                'tempat_perolehan' => NULL,
                'lokasi_penempatan' => NULL,
                'keterangan_penempatan' => NULL,
                'nama_pencatat' => NULL,
                'asal_usul' => NULL,
                'kode_aset' => NULL,
                'deskripsi_singkat' => NULL,
                'collectionable_type' => 'App\\CollectionGeologika',
                'collectionable_id' => 3,
                'saved' => 0,
                'published' => 1,
                'created_at' => '2020-01-07 10:58:49',
                'updated_at' => '2020-01-07 10:58:49',
            ),
            2 => 
            array (
                'id' => 6,
                'nama' => NULL,
                'nomor_inventaris' => NULL,
                'tanggal_inventaris' => NULL,
                'tanggal_pengadaan' => NULL,
                'kondisi' => NULL,
                'ukuran_berat' => NULL,
                'ukuran_panjang' => NULL,
                'ukuran_lebar' => NULL,
                'ukuran_tinggi' => NULL,
                'cara_perolehan' => NULL,
                'tempat_perolehan' => NULL,
                'lokasi_penempatan' => NULL,
                'keterangan_penempatan' => NULL,
                'nama_pencatat' => NULL,
                'asal_usul' => NULL,
                'kode_aset' => NULL,
                'deskripsi_singkat' => NULL,
                'collectionable_type' => 'App\\CollectionGeologika',
                'collectionable_id' => 6,
                'saved' => 0,
                'published' => 1,
                'created_at' => '2020-01-07 11:06:53',
                'updated_at' => '2020-01-07 11:06:53',
            ),
            3 => 
            array (
                'id' => 7,
                'nama' => 'Serpentenit',
                'nomor_inventaris' => '010000300',
                'tanggal_inventaris' => '1970-10-22',
                'tanggal_pengadaan' => '1968-12-12',
                'kondisi' => 'Baik',
                'ukuran_berat' => '1,7 kg',
                'ukuran_panjang' => '25 cm',
                'ukuran_lebar' => '15 cm',
                'ukuran_tinggi' => '17,5 cm',
                'cara_perolehan' => NULL,
                'tempat_perolehan' => 'Aceh',
                'lokasi_penempatan' => 'Pameran Tetap',
                'keterangan_penempatan' => NULL,
                'nama_pencatat' => NULL,
                'asal_usul' => NULL,
                'kode_aset' => NULL,
                'deskripsi_singkat' => 'Serpentenit termasuk jenis batuan beku yang
berasal dari samudera. Asalnya jauh dalam
perut bumi. Munculnya batuan ini dipermukaan
erat kaitannya dengan proses tektonik
(tumbukan lempenga',
                    'collectionable_type' => 'App\\CollectionGeologika',
                    'collectionable_id' => 7,
                    'saved' => 1,
                    'published' => 1,
                    'created_at' => '2020-01-09 13:42:01',
                    'updated_at' => '2020-01-09 13:44:15',
                ),
                4 => 
                array (
                    'id' => 8,
                    'nama' => 'Harimau Sumatera',
                    'nomor_inventaris' => '020000300',
                    'tanggal_inventaris' => '1970-10-22',
                    'tanggal_pengadaan' => '1968-12-11',
                    'kondisi' => 'Baik',
                    'ukuran_berat' => '91 - 140 kg',
                    'ukuran_panjang' => '198 - 250 cm',
                    'ukuran_lebar' => NULL,
                    'ukuran_tinggi' => '70 cm',
                    'cara_perolehan' => NULL,
                    'tempat_perolehan' => 'Aceh',
                    'lokasi_penempatan' => 'Pameran Tetap',
                    'keterangan_penempatan' => NULL,
                    'nama_pencatat' => NULL,
                    'asal_usul' => NULL,
                    'kode_aset' => NULL,
                    'deskripsi_singkat' => 'Harimau Sumatera merupakan satu dari enam
sub-spesies harimau yang masih hidup hingga
saat ini. Warna kulitnya merupakan yang paling
gelap dari seluruh harimau, mulai dari kuning
kemerah-merahan hingga orannye tua. Harimau
Sumatera merupakan satwa endemik Indonesia
yang populasinya saat ini tersebar di dalam dan
di luar kawasan konservasi di Sumatera.',
                    'collectionable_type' => 'App\\CollectionBiologika',
                    'collectionable_id' => 1,
                    'saved' => 1,
                    'published' => 1,
                    'created_at' => '2020-01-09 13:44:20',
                    'updated_at' => '2020-01-09 13:46:49',
                ),
            ));
        
        
    }
}