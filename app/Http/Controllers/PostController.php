<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $get_posts= Post::leftJoin('comments', 'posts.id', 'comments.post_id')->select('posts.description','posts.id', 'comments.message','comments.post_id')->get();

        foreach($get_posts as $post){
            $posts[$post->id][] = array($post->description,$post->message);
        }
        //get most commented post to first using array_multisort
        array_multisort(array_map('count', $posts), SORT_DESC, $posts);
        
        return view('index', compact('posts'));
    }

    public function search(Request $request)
    {
        $get_posts= Post::leftJoin('comments', 'posts.id', 'comments.post_id')
        ->orWhere('posts.description', 'LIKE', "%$request->search%")
        ->orWhere('comments.message', 'LIKE', "%$request->search%")
        ->select('posts.description','posts.id', 'comments.message','comments.post_id')
        ->get();
        $posts = array();
        foreach($get_posts as $post){
            $posts[$post->id][] = array($post->description,$post->message);
        }
        //get most commented post to first using array_multisort
        array_multisort(array_map('count', $posts), SORT_DESC, $posts);
        
        return view('index', compact('posts'));
    }
}
