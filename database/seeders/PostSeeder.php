<?php

namespace Database\Seeders;

use App\Models\Post;
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
        Post::create([
           "description"=>"First Post"
        ]);
        Post::create([
            "description"=>"Second Post"
        ]);
        Post::create([
            "description"=>"Third Post"
        ]);
        Post::create([
            "description"=>"Fourth Post"
        ]);
        Post::create([
            "description"=>"Fifth Post"
        ]);

        // call to comment seeder using call method
        $this->call([
            CommentSeeder::class
        ]);
    }
}
