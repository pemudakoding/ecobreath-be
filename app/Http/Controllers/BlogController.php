<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function __invoke(int $id)
    {

        return view(
            view: 'public.blog-single',
            data: [
                'blog' => Blog::find(id: $id)
            ]
        );
    }
}
