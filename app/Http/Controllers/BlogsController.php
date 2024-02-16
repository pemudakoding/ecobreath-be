<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogsController extends Controller
{
    public function __invoke()
    {
        $blogs = Blog::latest()->get();

        return view(
            view: 'public.blog',
            data: ['blogs' => $blogs]
        );
    }
}
