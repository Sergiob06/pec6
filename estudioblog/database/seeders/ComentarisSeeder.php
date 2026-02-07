<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comentari;
use App\Models\Post;

class ComentarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();

        $posts->each(function($post){
            Comentari::factory(3)->create([
                'post_id' => $post->id                
            ]);
        });
    }
}
