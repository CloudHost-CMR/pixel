<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Blog',
            'posts' => Post::orderBy('created_at', 'desc')->get(),
        ];

        return view('pixel.blog', $data);
    }

    public function details($slug)
    {
        $data = [
            'title' => 'Blog',
            'post' => Post::where('slug', $slug)
            ->where('status','PUBLISHED')
            ->firstOrfail()
        ];

        return view('pixel.details', $data);
    }
}
