<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blog Template for Bootstrap</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link href="/css/blog.css" rel="stylesheet">
        <link rel="icon" href="../../../../favicon.ico">
    </head>

  <body>

    <header>

      @include('layout.nav')

      @include ('layout.title')

    </header>

    <main role="main" class="container">

      <div class="row">

        @yield ('content')

        @include ('layout.sidebar')
      </div><!-- /.row -->

    </main><!-- /.container -->
    @include ('layout.footer')
  </body>
</html>
