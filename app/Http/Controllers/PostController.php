<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;

class PostController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth')->except(['index','show']);
    }

    public function index(Posts $post){
      //dd($post);


      $posts = $post->all();

      // Post::latest()
      //   ->filter(request(['month', 'year']))
      //   ->get();


      return view ('post.index', compact('posts','archives'));
    }

    public function create(){

      return view ('post.create');
    }

    public function store() {
      //dd(request()->all());

      //Validation
      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);
      //Create a new Post using the request data
      $post = new \App\Post;
      $post->title = request ('title');
      $post->body = request ('body');

      //save it to the DB
      $post->save();

      //redirect to the HP

      return redirect('/');
    }

    public function show(Post $post){
      //$task = Task::find($id);
      //return $tasks;

      return view ('post.show', compact('post'));
    }

}
