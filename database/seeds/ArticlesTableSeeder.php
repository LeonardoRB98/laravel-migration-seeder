<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $Faker)
    {
        for($i=0; $i < 20; $i++) {
            $article = new Article();
            $article->title = sentence(4);
            $article->subtitle = sentence(6);
            $article->author = $faker->name;
            $article->text = $faker->text(800);;
            $article->pubblication_date = $faker->DateTime();
            $article->created_at = $faker->DateTime();
            $article->updated_at = $faker->DateTime();
 
            $article->save();
        }
    }
}
