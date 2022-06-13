<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="orange lighten-5"> 
  <nav class="cyan accent-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" ><i class="material-icons whatshot">whatshot</i>La Tienda Fuego</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
      @yield('contenido')
  </div>
  <script src="{{ asset('materialize/js/materialize.js')}}"></script>
  <script>
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, []);
  });
  </script>
</body>
</html>