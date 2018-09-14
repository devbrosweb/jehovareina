<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

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
        for ($i=0; $i < 10 ; $i++) {
          $date   = date('Y-m-d H:i:s', strtotime("2018-09-05 18:00:00 +{$i} days"));
          $image  = 'post_image_'.$i.'.jpg';
          factory(Post::class)->create([
            'image' => $image,
            'created_at' => $date,
            'updated_at' => $date

          ]);
        }



    }
}
