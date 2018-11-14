<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('articles')->delete();

        Article::create(['text' => 'text lorem']);
    }
}
