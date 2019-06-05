<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class,100)->make()->each(function($post){

                  // quando abbiamo una chiave esterna prima bisogna creeare(make) poi fare il imap_savebody
                  // senza chiaVE ESTERNA SI PUO FARE DIRETTAMENTE IL CREATE()

                  $author= App\Author::inRandomOrder()->first();
                  $post->author()->associate($author);
                  $post->save();

                  $categories= App\Category::inRandomOrder()->take(rand(1,3))->get();
                  $post->categories()->attach($categories);
                });
    }
}
