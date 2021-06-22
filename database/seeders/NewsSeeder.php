<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news_1 = News::create([
            'news_title' => 'First news',
            'news_description' => 'First news description',
            'news_image' => '',
            'news_author' => 'Ram Lama',
        ]);
        $news_2 = News::create([
            'news_title' => 'Second news',
            'news_description' => 'Second news description',
            'news_image' => '',
            'news_author' => 'Ram Lama',
        ]);

        $news_3 = News::create([
            'news_title' => 'Third news',
            'news_description' => 'Third news description',
            'news_image' => '',
            'news_author' => 'Ram Lama',
        ]);

        $news_4 = News::create([
            'news_title' => 'Fourth news',
            'news_description' => 'Fourth news description',
            'news_image' => '',
            'news_author' => 'Ram Lama',
        ]);

    }

}
