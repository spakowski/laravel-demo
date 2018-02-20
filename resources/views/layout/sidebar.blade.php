<aside class="col-sm-3 ml-sm-auto blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
  </div>
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      @foreach ($archives as $monthlyStat)
        <li><a href="/post/?month={{$monthlyStat['month']}}&year={{$monthlyStat['year']}}">
          {{$monthlyStat['month']}} {{$monthlyStat['year']}} </a></li>
      @endforeach
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Tags</h4>
    <ol class="list-unstyled">
      @foreach ($tags as $tag)
        <li><a href="/post/tags/{{$tag}}">
          {{$tag}}
      @endforeach
    </ol>
  </div>
</aside><!-- /.blog-sidebar -->
