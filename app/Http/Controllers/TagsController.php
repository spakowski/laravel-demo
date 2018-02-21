<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index(Tag $tag = null)
    {
      $posts = $tag->posts;

      return view('post.index', compact('posts'));
    }
}
