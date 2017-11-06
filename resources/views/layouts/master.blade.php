<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    @yield('titulo')
    <style media="screen">
    ul, ol{margin: 0; padding: 0; list-style: none;}
      nav{background-color: rgba(174, 219, 191, 0.4);}
      a{text-decoration: none;}
      li{float: left; margin-left: 15px;}
      .clear{clear: both;}
    </style>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="{{route('listado_actores')}}"><h2>Actores</h2></a></li>
        <li><a href="{{route('lista_peliculas')}}"><h2>Peliculas</h2></a></li>
        <li><a href="{{route('saludo')}}"><h2>Saludo</h2></a></li>
      </ul>
      <div class="clear"></div>
    </nav>
  @yield('cuerpo')
  </body>
</html>
