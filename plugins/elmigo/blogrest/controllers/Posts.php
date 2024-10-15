<?php

namespace Elmigo\BlogREST\Controllers;

use Cms\Classes\Controller;
use Winter\Blog\Models\Post;
use Winter\Storm\Support\Facades\Markdown;

class Posts extends Controller
{
    public function item(string $slug)
    {
        $post = Post::query()->where('slug', '=', $slug)->first();
        return Markdown::parse($post->content);
    }
}
