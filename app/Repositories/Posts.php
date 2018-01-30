<?php
namespace App\Repositories;

use App\Post;
use App\Redis;

class Posts
{
  public function __construct(Redis $redis)
  {
    $this->redis=$redis;
  }

  public function all()
  {
    //return all posts
    return Post::latest()
       ->filter(request(['month', 'year']))
       ->get();
  }

  public function find()
  {
    //return a specific post
  }
}
 ?>
