<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
      $this->validate(request(), ['body' => 'required|min:2']);
      
      $post->addComment(request('body'));
      return back();
      //Eine Möglichkeit:

      // Comment::create([
      //   'body' => request('body'),
      //   'post_id' => $post->id
      // ]);

      //noch eine Möglichkeit:
      // $comment = new \App\Comment;
      // $comment->body = request ('body');
      // $comment->post_id = $post->id;
      //
      // $comment->save();
      //
      // //save it to the DB
      // $post->save();

    }
}
