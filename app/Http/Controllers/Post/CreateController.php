<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class CreateController extends Controller
{
    public function __invoke()
    {
        Post::create([
            'title' => 'hello storm',
            'content' => 'storm content',
            'image' => 'storm img',
            'likes' => 50,
            'is_published' => 1
        ]);
    }
}
