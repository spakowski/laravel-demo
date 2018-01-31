@extends ('layout.master')

@section ('content')
        <div class="col-sm-8 blog-main">

<h1> Create a Post</h1>

<form method="POST" action="/post">
  {{ csrf_field() }}
@include ('layout.errors')

  <div class="form-group">
    <label for="title">Titel:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Titel des Blog Eintrags">
  </div>

  <div class="form-group">
    <label for="exampleInputBody">Inhalt:</label>
    <textarea name="body" rows="8" cols="80" class="form-control" placeholder="Inhalt des Blogeintrags"></textarea>
  </div>



  <button type="submit" class="btn btn-primary">Veröffentlichen</button>
</form>
</div>
@endsection
