<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //genarate 10 dummy data
      $date = Carbon::create( 2018, 9, 7, 6);
        for ($i=1; $i <= 10 ; $i++) {
          $date->addDays(1);
          $publishedDay = clone($date);
          $createdDay   = clone($date);
          
          $image  = 'post_image_'.$i.'.jpg';
          factory(Post::class)->create([
            'image' => rand(0,1) == 1 ? $image : null,
            'created_at' => $createdDay,
            'updated_at' => $createdDay,
            'published_at' => $i < 5 ? $publishedDay :
                            (rand(0,1) ? null : $publishedDay->addDays(4))

          ]);
        }



    }
}
