<?php

use Illuminate\Database\Seeder;

class ContactMessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_messages')->delete();
        
        \DB::table('contact_messages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category' => 'berisikan saran',
                'name' => 'Fakhrurrazi Andi',
                'email' => 'fakhrurrazi.andi@gmail.com',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquam placerat tellus, sit amet posuere mauris scelerisque ut. Nunc a sem dapibus, volutpat quam id, pharetra odio. Morbi porttitor ante urna, at venenatis enim malesuada eget. Nullam varius luctus lacinia. Etiam dapibus erat gravida, tempor risus eget, sollicitudin mauris. Donec est est, scelerisque et volutpat sed, ultrices a sapien. In hac habitasse platea dictumst. Fusce rutrum id risus eu convallis.

Phasellus at metus sed ante dignissim placerat. Maecenas placerat ullamcorper diam, at fermentum augue porttitor in. Vivamus ac facilisis est. Praesent suscipit diam non augue volutpat viverra. Phasellus volutpat eu justo eget aliquet. Nam orci justo, tempor a massa vel, aliquet tincidunt tortor. Fusce imperdiet, felis id commodo egestas, erat nibh bibendum nunc, nec convallis odio nulla eget eros. Praesent consectetur venenatis posuere. Cras pulvinar iaculis purus, id mollis leo varius vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum, velit semper elementum varius, tortor lacus rhoncus ligula, ac sagittis justo sapien at leo. In gravida in justo eu dignissim. Nulla tempor eleifend massa, eget rutrum massa dignissim non. Suspendisse tempus augue eget elit laoreet venenatis. Vestibulum posuere placerat augue, quis sodales mi lobortis eu. Cras vel eros velit.',
                'created_at' => '2019-11-12 07:56:33',
                'updated_at' => '2019-11-12 07:56:33',
            ),
        ));
        
        
    }
}