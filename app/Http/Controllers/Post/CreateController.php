<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use JetBrains\PhpStorm\NoReturn;

class CreateController extends Controller
{
    #[NoReturn] public function __invoke()
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
