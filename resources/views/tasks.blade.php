<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tasks</title>
    </head>
    <body>
      <h1>Tasks</h1>

      <ul>
        @foreach ($tasks as $task)
          <li> {{$task->name}} </li>
          @endforeach
      </ul>
    </body>
</html>
