<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function store()
    {
        Post::create([
            'title' => request('title'),
            'post-trixFields' => request('post-trixFields'),
        ]);
        
        return redirect('/');
    }
}
