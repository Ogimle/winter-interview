<?php

use Illuminate\Support\Facades\Route;
use Elmigo\BlogREST\Controllers\Posts;

Route::get('rest/blog/post/{slug}', [Posts::class, 'item']);
