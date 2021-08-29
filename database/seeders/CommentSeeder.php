<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            "message"=> Str::random(20),
            "post_id"=>2
        ]);
        Comment::create([
            "message"=> Str::random(30),
            "post_id"=>2
        ]);
        Comment::create([
            "message"=> Str::random(40),
            "post_id"=>2
        ]);

        Comment::create([
            "message"=> "First Comment",
            "post_id"=> 3
        ]);

        Comment::create([
            "message"=> "Second Comment",
            "post_id"=> 3
        ]);

        Comment::create([
            "message"=> Str::random(60),
            "post_id"=> 5
        ]);
    }
}
