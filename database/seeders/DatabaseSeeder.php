<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\Tag::create([
            'name' => 'Laravel'
        ]);
        \App\Models\Tag::create([
            'name' => 'Vue JS'
        ]);
        \App\Models\Tag::create([
            'name' => 'css'
        ]);
        \App\Models\Tag::create([
            'name' => 'html'
        ]);
        \App\Models\Tag::create([
            'name' => 'API'
        ]);

        \App\Models\Post::factory(3)->create();
        
        // Relasi Post dan Tag
        // 1
        \App\Models\PostTag::create([
            'post_id' => 1,
            'tag_id' => 1
        ]);
        \App\Models\PostTag::create([
            'post_id' => 1,
            'tag_id' => 2
        ]);
        \App\Models\PostTag::create([
            'post_id' => 1,
            'tag_id' => 3
        ]);

        // 2
        \App\Models\PostTag::create([
            'post_id' => 2,
            'tag_id' => 1
        ]);
        \App\Models\PostTag::create([
            'post_id' => 2,
            'tag_id' => 2
        ]);
        \App\Models\PostTag::create([
            'post_id' => 2,
            'tag_id' => 3
        ]);

        // 3
        \App\Models\PostTag::create([
            'post_id' => 3,
            'tag_id' => 4
        ]);
        \App\Models\PostTag::create([
            'post_id' => 3,
            'tag_id' => 5
        ]);
        \App\Models\PostTag::create([
            'post_id' => 3,
            'tag_id' => 1
        ]);
    }
}
