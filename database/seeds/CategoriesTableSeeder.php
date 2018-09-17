 <?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Category::class)->create([
          'title' => 'Web Design'
        ]);
        factory(App\Category::class)->create([
          'title' => 'Web Programming'
        ]);
        factory(App\Category::class)->create([
          'title' => 'Internet'
        ]);
        factory(App\Category::class)->create([
          'title' => 'Social Marketing'
        ]);
        factory(App\Category::class)->create([
          'title' => 'Photography'
        ]);

        //update the posts database
        for ($post_id=1; $post_id <=10 ; $post_id++) {
          //take 1 of 5 category just created
          $category_id = rand(1,5);
          DB::table('posts')
              ->where('id', $post_id)
              ->update(['category_id' => $category_id]);
        }
    }
}
