@extends('layout.master')
@section ('content')

      <div class="container-fluid">
        <img src="images/batman.jpg"  alt="Responsive image" height="auto" style="position:absolute;z-index:-1;">

  <!-- Content here -->
      <Button style="position:absolute;top:50%;left:50%;transform: translate(-50%, -50%);">Voranmeldung now!</button>
      <h1> <?php echo ("$name ist $age Jahre alt");?> </h1>

</div>
@endsection
