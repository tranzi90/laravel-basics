<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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

        dd('created');
    }
}
