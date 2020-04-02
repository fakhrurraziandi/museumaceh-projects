<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Festival Tari Sumatera',
                'slug' => 'festival-tari-sumatera',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nascetur ridiculus mus mauris vitae ultricies leo. Feugiat in ante metus dictum at tempor commodo. Aliquet enim tortor at auctor. Convallis convallis tellus id interdum velit laoreet id. Vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor.</p>

<p>Elementum sagittis vitae et leo duis. Donec adipiscing tristique risus nec. Cursus metus aliquam eleifend mi in nulla. Quis commodo odio aenean sed adipiscing. Aliquam faucibus purus in massa tempor. Vestibulum sed arcu non odio euismod. Ut tristique et egestas quis ipsum. Consequat mauris nunc congue nisi vitae suscipit tellus mauris a.</p>

<p>Donec pretium vulputate sapien nec sagittis. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque habitant. Est velit egestas dui id ornare arcu. Magna fermentum iaculis eu non diam phasellus vestibulum lorem. A lacus vestibulum sed arcu. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus in. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Viverra aliquet eget sit amet tellus cras. Nec ultrices dui sapien eget mi proin sed.</p>',
                'location' => 'Taman Ratu Safiatuddin',
                'event_date' => NULL,
                'featured_image' => 'uploads/featured_images/bd33f02c4e28615b5af2d24703e066d5.jpg',
                'created_at' => '2019-11-02 12:54:06',
                'updated_at' => '2019-11-02 12:54:06',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Debus Aceh',
                'slug' => 'debus-aceh',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquam placerat tellus, sit amet posuere mauris scelerisque ut. Nunc a sem dapibus, volutpat quam id, pharetra odio. Morbi porttitor ante urna, at venenatis enim malesuada eget. Nullam varius luctus lacinia. Etiam dapibus erat gravida, tempor risus eget, sollicitudin mauris. Donec est est, scelerisque et volutpat sed, ultrices a sapien. In hac habitasse platea dictumst. Fusce rutrum id risus eu convallis.</p>

<p>Phasellus at metus sed ante dignissim placerat. Maecenas placerat ullamcorper diam, at fermentum augue porttitor in. Vivamus ac facilisis est. Praesent suscipit diam non augue volutpat viverra. Phasellus volutpat eu justo eget aliquet. Nam orci justo, tempor a massa vel, aliquet tincidunt tortor. Fusce imperdiet, felis id commodo egestas, erat nibh bibendum nunc, nec convallis odio nulla eget eros. Praesent consectetur venenatis posuere. Cras pulvinar iaculis purus, id mollis leo varius vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum, velit semper elementum varius, tortor lacus rhoncus ligula, ac sagittis justo sapien at leo. In gravida in justo eu dignissim. Nulla tempor eleifend massa, eget rutrum massa dignissim non. Suspendisse tempus augue eget elit laoreet venenatis. Vestibulum posuere placerat augue, quis sodales mi lobortis eu. Cras vel eros velit.</p>',
                'location' => 'Museum Aceh',
                'event_date' => '2019-11-12',
                'featured_image' => 'uploads/featured_images/dda8d87065d3a8e68dfd8dc4290e408c.jpg',
                'created_at' => '2019-11-12 07:48:00',
                'updated_at' => '2019-11-12 07:48:00',
            ),
        ));
        
        
    }
}