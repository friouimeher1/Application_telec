<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../css/app.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @yield('content')
          @include('flashy::message')
        </div>
      </div>
    </div>
  </body>
</html>
