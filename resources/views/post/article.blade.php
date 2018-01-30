<div class="blog-post">
  <h2 class="blog-post-title">
    <a href="/post/{{$post->id}}">{{$post->title}}</a></h2>
  <p class="blog-post-meta">{{$post->updated_at->toFormattedDateString()}} by <a href="#">Adalbert</a></p>

  <p>{{$post->body}}</p>
</div><!-- /.blog-post -->
