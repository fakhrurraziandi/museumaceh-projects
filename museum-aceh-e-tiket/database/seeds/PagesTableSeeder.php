<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Sejarah Museum Aceh',
                'slug' => 'sejarah-museum-aceh',
            'body' => '<p><strong>Museum Aceh</strong> didirikan pada masa pemerintahan Hindia Belanda, yang pemakaiannya diresmikan oleh Gubernur Sipil dan Militer Aceh Jenderal H.N.A. Swart pada tanggal 31 Juli 1915. Pada waktu itu bangunannya berupa sebuah bangunan Rumah Tradisional Aceh (Rumoh Aceh). Bangunan tersebut berasal dari Paviliun Aceh yang ditempatkan di arena Pameran Kolonial (De Koloniale Tentoonsteling) di Semarang pada tanggal <strong>13 Agustus - 15 November 1914.</strong></p>

<p>Pada waktu penyelenggaraan pameran di Semarang, <strong>Paviliun Aceh</strong> memamerkan koleksi-koleksi yang sebagian besar adalah milik pribadi <strong>F.W. Stammeshaus</strong>, yang pada tahun 1915 menjadi Kurator Museum Aceh pertama. Selain koleksi milik Stammeshaus, juga dipamerkan koleksi-koleksi berupa benda-benda pusaka dari pembesar Aceh, sehingga dengan demikian Paviliun Aceh merupakan Paviliun yang paling lengkap koleksinya. Pada pameran itu Paviliun Aceh berhasil memperoleh 4 medali emas, 11 perak, 3 perunggu, dan piagam penghargaan sebagai Paviliun terbaik. Keempat medali emas tersebut diberikan untuk: pertunjukan, boneka-boneka Aceh, etnografika, dan mata uang; perak untuk pertunjukan, foto, dan peralatan rumah tangga. Karena keberhasilan tersebut Stammeshaus mengusulkan kepada Gubernur Aceh agar Paviliun tersebut dibawa kembali ke Aceh dan dijadikan sebuah Museum. Ide ini diterima oleh Gubernur Aceh Swart. Atas prakarsa Stammeshaus, Paviliun Aceh itu dikembalikan ke Aceh, dan pada tanggal 31 Juli 1915 diresmikan sebagai Aceh Museum, yang berlokasi di sebelah Timur Blang Padang di Kutaraja (Banda Aceh sekarang). Museum ini berada di bawah tanggungjawab penguasa sipil dan militer Aceh F.W. Stammeshaus sebagai kurator pertama.</p>

<p>Setelah Indonesia Merdeka, Museum Aceh menjadi milik Pemerintah Daerah Aceh yang pengelolaannya diserahkan kepada Pemerintah Daerah Tk. II Banda Aceh. Pada tahun 1969 atas prakarsa T. Hamzah Bendahara, Museum Aceh dipindahkan dari tempatnya yang lama (Blang Padang) ke tempatnya yang sekarang ini, di Jalan Sultan Alaidin Mahmudsyah pada tanah seluas 10.800 m2. Setelah pemindahan ini pengelolaannya diserahkan kepada Badan Pembina Rumpun Iskandarmuda (<strong>BAPERIS</strong>) Pusat.</p>

<p>Sejalan dengan program Pemerintah tentang pengembangan kebudayaan, khususnya pengembangan permuseuman, sejak tahun 1974 Museum Aceh telah mendapat biaya Pelita melalui Proyek Rehabilitasi dan Perluasan Museum Daerah Istimewa Aceh. Melalui Proyek Pelita telah berhasil direhabilitasi bangunan lama dan sekaligus dengan pengadaan bangunan-bangunan baru. Bangunan baru yang telah didirikan itu gedung pameran tetap, gedung pertemuan, gedung pameran temporer dan perpustakaan, laboratorium dan rumah dinas. Selain untuk pembangunan sarana/gedung Museum, dengan biaya Pelita telah pula diusahakan pengadaan koleksi, untuk menambah koleksi yang ada. Koleksi yang telah dapat dikumpulkan, secara berangsur-angsur diadakan penelitian dan hasilnya diterbitkan guna dipublikasikan secara luas.</p>

<p>geluarkan Surat Keputusan bersama pada tanggal 2 september 1975 nomor 538/1976 dan SKEP/IX/1976 yang isinya tentang persetujuan penyerahan Museum kepada Departemen Pendidikan dan Kebudayan untuk dijadikan sebagai Museum Negeri Provinsi, yang sekaligus berada di bawah tanggungjawab Departemen Pendidikan dan Kebudayaan. Kehendak Pemerintah Daerah untuk menjadikan Museum Aceh sebagai Museum Negeri Provinsi baru dapat direalisir tiga tahun kemudian, yaitu dengan keluarnya Surat Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia, tanggal 28 Mei 1979, nomor 093/0/1979 terhitung mulai tanggal 28 Mei 1979 statusnya telah menjadi Museum Negeri Aceh. Peresmiannya baru dapat dilaksanakan setahun kemudian atau tepatnya pada tanggal 1 September 1980 oleh Menteri Pendidikan dan Kebudayaan Dr. Daoed Yoesoef. Sesuai peraturan pemerintah nomor 25 tahun 2000 tentang kewenangan pemerintah dan kewenangan provinsi sebagai Daerah Otonomi pasal 3 ayat 5 butir 10 f, maka kewenangan penyelenggaraan Museum Negeri Propinsi Daerah Istimewa Aceh berada di bawah Pemerintah Daerah Tingkat I Provinsi Nanggroe Aceh Darussalam (sekarang Provinsi Aceh).</p>',
                'featured_image' => 'uploads/featured_images/15bb03d440d3530fa52c7c58970274e4.jpg',
                'created_at' => '2019-11-01 20:18:57',
                'updated_at' => '2019-11-02 09:25:21',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Koleksi Museum Aceh',
                'slug' => 'koleksi-museum-aceh',
                'body' => '<p>Koleksi museum Aceh tergolong atas tiga klasifikasi besar, yaitu koleksi anorganik, organik dan campuran. Klasifikasi tersebut kemudian terbagi lagi ke dalam 10 jenis koleksi. Saat ini, jumlah koleksi Museum Aceh sebanyak 6.038 item, yang terbagi dalam:</p>

<table border="1" cellpadding="1" cellspacing="1" style="width:500px">
<thead>
<tr>
<th scope="col">No</th>
<th scope="col">Jenis</th>
<th scope="col">Jumlah Koleksi</th>
</tr>
</thead>
<tbody>
<tr>
<td>1.</td>
<td>Geologika</td>
<td>48</td>
</tr>
<tr>
<td>2.</td>
<td>Biologika</td>
<td>217</td>
</tr>
<tr>
<td>3.</td>
<td>Etnografika</td>
<td>1869</td>
</tr>
<tr>
<td>4.</td>
<td>Arkelogika</td>
<td>366</td>
</tr>
<tr>
<td>5.</td>
<td>Historika</td>
<td>380</td>
</tr>
<tr>
<td>6.</td>
<td>Numismatika &amp; Heraldika</td>
<td>698</td>
</tr>
<tr>
<td>7.</td>
<td>Filologika</td>
<td>1599</td>
</tr>
<tr>
<td>8.</td>
<td>Keramonologika</td>
<td>454</td>
</tr>
<tr>
<td>9.</td>
<td>Seni Rupa</td>
<td>404</td>
</tr>
<tr>
<td>10.</td>
<td>Teknologika</td>
<td>3</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><strong>Jumlah</strong></td>
<td><strong>6038</strong></td>
</tr>
</tbody>
</table>

<p>Dari 6.038 item koleksi Museum Aceh, sebanyak 600 diantaranya sudah dilakukan proses digitalisasi. Jika anda belum mempunyai waktu untuk datang dan melihat koleksi Museum Aceh, maka anda tetap bisa mengakses beberapa koleksi online dengan cara mengklik dibawah ini:</p>

<p>&nbsp;</p>',
                'featured_image' => 'uploads/featured_images/e261489ab942429a6600c1c4121ac14d.jpg',
                'created_at' => '2019-11-01 20:24:51',
                'updated_at' => '2019-11-02 09:25:57',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Struktur Organisasi',
                'slug' => 'struktur-organisasi',
                'body' => '<p>&nbsp;</p>

<p><img alt="" src="http://localhost:8000/photos/1/dummy.PNG" style="width:100%" /></p>',
                'featured_image' => NULL,
                'created_at' => '2019-11-02 19:35:01',
                'updated_at' => '2019-11-12 09:36:35',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Waktu Kunjungan',
                'slug' => 'waktu-kunjungan',
                'body' => '<p>Museum Aceh dibuka setiap hari, kecuali pada hari libur nasional. Jam kunjungan untuk ruang Pameran Tetap dan Rumoh Aceh dibuka sejak pagi hari, dimulai dari pukul 08.30 sampai dengan 12.00 WIB. Sementara untuk sesi siang hari, jam kunjungan dibuka sejak pukul 14.00 sampai dengan 16.15 WIB.</p>

<p>Untuk menjaga kualitas koleksi dan mengupayakan agar pengalaman kunjungan anda tetap berkesan, Museum Aceh akan melakukan pemeliharaan ruang Pameran Tetap dan Rumoh Aceh. Agar tidak menggangu rencana kunjungan anda, maka silahkan mengunjungi situs resmi Museum Aceh ini untuk mengetahui jadwal pemeliharaan tersebut.</p>

<p>Jika pada waktu tertentu jumlah pengunjung ruang Pameran Tetap dan Rumoh Aceh terlalu ramai, maka mohon kesediaan anda untuk menunggu antrian. Pembatasan jumlah pengunjung ini untuk memastikan agar kami dapat memberikan pelayanan yang maksimal dan juga untuk memberikan kenyamanan bagi setiap pengunjung Museum Aceh.</p>

<p style="text-align: center;"><img alt="" src="http://localhost:8000/photos/1/waktu kunjungan.PNG" style="height:117px; width:250px" /></p>

<p>Sebelum merencanakan kunjungan anda, ada baiknya untuk terlebih dahulu mengetahui peraturan kunjungan dan fasilitas di Museum Aceh dengan cara mengklik <a href="http://google.com">link </a>ini.</p>',
                'featured_image' => 'uploads/featured_images/1385974ed5904a438616ff7bdb3f7439.png',
                'created_at' => '2019-11-02 19:39:08',
                'updated_at' => '2019-11-12 08:37:17',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Tiket',
                'slug' => 'tiket',
                'body' => '<p>Sesuai dengan Qanun Aceh Nomor 2 Tahun 2016 Tentang Retribusi Tempat Rekreasi, terdapat enam kategori tarif tiket masuk di Museum Aceh. Silahkan pilih kategori kunjungan anda untuk mengetahui besaran tiket yang harus anda bayarkan.</p>

<table align="center" border="1" cellpadding="1" cellspacing="1" style="width:700px">
<tbody>
<tr>
<td>
<p><strong>Tamu Asing</strong></p>
</td>
<td>
<p><strong>Anak-Anak</strong></p>
</td>
<td>
<p><strong>Rombongan Dewasa</strong></p>
</td>
<td>
<p><strong>Dewasa</strong></p>
</td>
<td>
<p><strong>Rombongan Anak-Anak</strong></p>
</td>
</tr>
<tr>
<td>
<h1>5.000</h1>
</td>
<td>
<h1>2.000</h1>
</td>
<td>
<h1>2.000</h1>
</td>
<td>
<h1>3.000</h1>
</td>
<td>
<h1>1.000</h1>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<p>Untuk membantu mempercepat proses kunjungan anda, Museum Aceh juga menyediakan fasilitas pemesanan tiket yang dapat diakses secara online. Jika anda telah merencanakan jadwal kunjungan, silahkan isi form dibawah ini untuk proses pemesanan tiket.</p>

<p>&nbsp;</p>',
                'featured_image' => NULL,
                'created_at' => '2019-11-02 19:45:55',
                'updated_at' => '2019-11-02 19:48:26',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Peraturan dan Fasilitas',
                'slug' => 'peraturan-dan-fasilitas',
                'body' => '<p>Untuk menjaga keamanan dan kenyaman bersama, ada beberapa peraturan yang perlu anda ketahui ketika berkunjung ke Museum Aceh. Antara lain :</p>

<h3><strong>Peraturan</strong></h3>

<ul>
<li>Tidak merusak koleksi Museum Aceh;</li>
<li>Tidak membawa makanan dan minuman kedalam ruang pameran dan perpustakaan;</li>
<li>Menitipkan barang bawaan pada tempat yang telah disediakan. Jika ada barang bawaaan yang tidak mungkin untuk dititipkan, harap menghubungi petugas di Museum Aceh. Demi keamanan, petugas sewaktu-waktu dapat meminta izin untuk memeriksa barang bawaan pengunjung, jadi dimohon pengertian dan kerjasama anda;</li>
<li>Ukuran maksimum barang yang diperbolehkan masuk kedalam ruang pameran tetap adalah 40 cm x 40 cm x 50 cm. Sementara untuk berat barang yang diperbolehkan adalah 8 kg.</li>
<li>Menjaga kebersihan;</li>
<li>Dilarang merokok pada area yang telah ditentukan;</li>
<li>Tidak membawa senjata tajam;</li>
<li>Kegiatan perekaman video dan photography menggunakan flash hanya diperbolehkan pada area tertentu. Penggunaan tripod dan monopod tidak diperbolehkan. Pengunjung yang membutuhkan izin khusus diharapkan untuk menghubungi petugas;</li>
<li>Turut menjaga keamanan dan kenyamanan pengunjung lainnya;</li>
</ul>

<hr />
<h3><strong>Fasilitas</strong></h3>

<p>&nbsp;</p>

<div class="btgrid">
<div class="row row-1">
<div class="col col-md-4">
<div class="content">
<h5><strong>Pustaka</strong></h5>

<p>Museum Aceh memiliki pustaka yang berisikan berbagai koleksi buku dan artikel yang dapat digunakan untuk kebutuhan penelitian dan pembelajaran.</p>

<p>Pustaka Museum Aceh juga memiliki kumpulan artikel berita dari beberapa surat kabar lokal maupun nasional yang dikumpulkan sejak tahun 1972.</p>

<p>&nbsp;</p>
</div>
</div>

<div class="col col-md-4">
<div class="content">
<h5><strong>Ruang Menyusui</strong></h5>

<p>Ruang menyusui tersedia di gedung preservasi dan konservasi. Pengunjung yang membutuhkan akses terhadap ruang menyusui, harap menghubungi petugas Museum Aceh.</p>

<p>&nbsp;</p>
</div>
</div>

<div class="col col-md-4">
<div class="content">
<h5><strong>Toilet</strong></h5>

<p>Toilet tersedia diluar gedung pameran tetap. Museum Aceh memiliki toilet yang tersebar di beberapa titik lokasi. Untuk mengetahuinya, silahkan lihat papan informasi yang tersedia.</p>

<p>Agar setiap pengunjung merasa nyaman, mohon menjaga kebersihan ketika selesai menggunakan toilet.</p>

<p>&nbsp;</p>
</div>
</div>
</div>

<div class="row row-2">
<div class="col col-md-4">
<div class="content">
<h5><strong>Kebutuhan Khusus</strong></h5>

<p>Museum Aceh dilengkapi fasilitas untuk menunjang aksesibilitas pengunjung disabilitas.</p>

<p>Pengunjung dengan kebutuhan khusus yang memerlukan pendampingan dimohon untuk menghubungi petugas.</p>

<p>&nbsp;</p>
</div>
</div>

<div class="col col-md-4">
<div class="content">
<h5><strong>Kafe Museum</strong></h5>

<p>Ruang menyusui tersedia di gedung preservasi dan konservasi. Pengunjung yang membutuhkan akses terhadap ruang menyusui, harap menghubungi petugas Museum Aceh.</p>

<p>&nbsp;</p>
</div>
</div>

<div class="col col-md-4">
<div class="content">
<h5><strong>Free Wifi</strong></h5>

<p>Nikmati layanan akses internet secara gratis selama anda berada di Museum Aceh.</p>

<p>Bagikan pengalaman anda tentang Museum Aceh melalui jaringan sosial media.</p>

<p>&nbsp;</p>
</div>
</div>
</div>
</div>

<h3>&nbsp;</h3>',
                'featured_image' => NULL,
                'created_at' => '2019-11-02 20:10:54',
                'updated_at' => '2019-11-12 09:01:43',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Denah Museum',
                'slug' => 'denah-museum',
                'body' => '<p><img alt="" src="http://localhost:8000/photos/1/denah.jpg" style="width:100%" /></p>',
                'featured_image' => NULL,
                'created_at' => '2019-11-02 20:21:59',
                'updated_at' => '2019-11-12 09:02:29',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Penelitian',
                'slug' => 'penelitian',
                'body' => '<h3><strong>The standard Lorem Ipsum passage, used since the 1500s</strong></h3>

<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>

<h3><strong>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</strong></h3>

<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>

<h3><strong>1914 translation by H. Rackham</strong></h3>

<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>',
                'featured_image' => 'uploads/featured_images/3ba716f4a7265eef381f7cef9e271f27.PNG',
                'created_at' => '2019-11-03 04:29:09',
                'updated_at' => '2019-11-03 04:29:09',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Kerja Sama',
                'slug' => 'kerja-sama',
                'body' => '<p>Museum Aceh sangat terbuka dengan berbagai bentuk program kerjasama. Hal ini dilakukan untuk menjadikan Museum Aceh sebagai sumber informasi perkembangan sejarah Aceh. Mengingat sejarah Aceh yang begitu panjang dan berhubungan pula dengan berbagai suku bangsa didunia, maka untuk menggali informasi rekam jejak sejarah tersebut membutuhkan sebuah kolaborasi dengan berbagai pihak. Untuk itu, segala bentuk kerjasama dalam upaya peningkatan nilai edukatif, informatif, rekreatif, inovatif dan imajinatif dari Museum Aceh tentu akan didukung dengan sebaik-baiknya.</p>

<p>Berikut adalah beberapa program kerjasama yang ditawarkan Museum Aceh:</p>

<ol>
<li>Kerjasama antar Museum (pertukaran tenaga ahli, kurator dan benda koleksi);</li>
<li>Kerjasama dengan pemerintah daerah dalam rangka penelitian sejarah daerah;</li>
<li>Kerjasama dengan universitas untuk penelitian sejarah;</li>
<li>Kerjasama dengan lembaga pendidikan untuk menyusun program penguatan sejarah bagi peserta didik;</li>
<li>Kemitraan dengan perusahaan untuk mendorong promosi dan publikasi;</li>
<li>Kerjasama dengan komunitas peduli sejarah;</li>
<li>Penelitian bersama (collaborative research);</li>
<li>Kerjasama kegiatan pameran, seminar sejarah dan kebudayaan Aceh;</li>
</ol>

<p>Kerjasama yang dapat dibangun tidak terbatas pada 8 program diatas saja, jika anda ingin melakukan kerjasama dalam bentuk maka Museum Aceh akan mencoba mempelajarinya. Sampaikan bentuk kerjasama yang anda inginkan dengan cara mengisi form halaman kontak pada website ini.</p>',
                'featured_image' => 'uploads/featured_images/1e9f65024cd764a33b94a14b0e79f42d.PNG',
                'created_at' => '2019-11-03 04:30:39',
                'updated_at' => '2019-11-03 04:33:37',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Dukungan',
                'slug' => 'dukungan',
                'body' => '<p>Dukungan anda sangat penting untuk membantu Museum Aceh memenuhi tugas dan fungsinya sebagai sumber informasi sejarah Aceh dan mampu memberi nilai edukatif, informatif, rekreatif, inovatif dan imajinatif bagi masyarakat yang peduli dengan sejarahnya. &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</p>

<p>Ada banyak cara yang dapat Anda lakukan untuk memberi dukungan, antara lain adalah:</p>

<ol>
<li>Mengedukasi keluarga, teman dan masyarakat dalam menjaga nilai sejarah dan budaya Aceh;</li>
<li>Menginformasikan kepada Museum Aceh jika anda mengetahui atau menemukan benda peninggalan sejarah Aceh;</li>
<li>Menempatkan nama anda dalam lembar sejarah Museum Aceh dengan cara mendonasikan benda sejarah untuk dikelola oleh Museum Aceh;</li>
<li>Menjadi Relawan Museum Aceh (RAMAH) yang nantinya akan terlibat dalam berbagai kegiatan Museum Aceh;</li>
<li>Mempromosikan Museum Aceh melalui sosial media;</li>
<li>Memberikan kritik dan saran demi perbaikan pelayanan dan pengelolaan Museum Aceh;</li>
</ol>

<p>Kepada anda yang selama ini telah memberikan berbagai bentuk dukungan kepada Museum Aceh, kami ucapkan terimakasih.</p>',
                'featured_image' => 'uploads/featured_images/5a0c828364dbf6dd406139dab7b25398.PNG',
                'created_at' => '2019-11-03 04:35:24',
                'updated_at' => '2019-11-03 04:35:24',
            ),
        ));
        
        
    }
}