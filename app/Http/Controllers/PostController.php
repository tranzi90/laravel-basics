<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        foreach ($posts as $post)
            dump($post->title);

        dd('gg');
    }

    public function create() {
        Post::create([
            'title' => 'hello storm',
            'content' => 'storm content',
            'image' => 'storm img',
            'likes' => 50,
            'is_published' => 1
        ]);

        dd('created');
    }
}
