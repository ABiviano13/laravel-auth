<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 100; $i++){

            $post = new Post();
            $post->title = $faker->unique()->sentence(4);
            $post->content = $faker->optional()->text(350);
            $post->slug = Str::slug(¥post->title, '-');


        }
    }
}
