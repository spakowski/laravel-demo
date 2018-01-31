@extends ('layout.master')

@section ('content')
  <div class="col-sm-8 blog-main">
    <h1>{{$post->title}}</h1>

    {{$post->body}}

    <a href="/post">BACK</a>

    <ul class="list-group">
    @foreach ($post->comments as $comment)
      <li class="list-group-item">
        <strong> {{\Auth::user($comment->user_id)->name}} wrote {{$comment->created_at->diffForHumans()}} : &nbsp; </strong>
        {{$comment->body}}
      </li>
    @endforeach
    </ul>

  <hr>
  @include('layout.errors')
  <div class="card">
      <div class="card-block">
        <form method="POST" action="/post/{{$post->id}}/comments">
          {{ csrf_field() }}
          <div class="form-group">
            <textarea name="body" placeholder="Dein Kommentar" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary"> Kommentar einfügen</button>
          </div>

        </form>
      </div>
  </div>
</div>

@endsection
