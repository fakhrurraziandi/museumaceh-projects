<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(KategoriPengunjungTableSeeder::class);
        $this->call(KunjunganTableSeeder::class);
        $this->call(TicketTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ContactMessagesTableSeeder::class);
        $this->call(CollectionsTableSeeder::class);
        $this->call(CollectionGeologikaTableSeeder::class);
        $this->call(Event2TableSeeder::class);
        $this->call(CollectionBiologikaTableSeeder::class);
        $this->call(BoothTableSeeder::class);
    }
}
