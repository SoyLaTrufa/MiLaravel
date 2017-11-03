<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id="agregarPelicula" name="agregarPelicula" method="POST" action="{{route('crear')}}">
      {{csrf_field()}}
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo"/ value="{{old('title')}}">
        </div>
        <div>
            <label for="rating">Rating</label>
            <input type="text" name="rating" id="rating"/ value="{{old('rating')}}">
        </div>
        <div>
            <label for="premios">Premios</label>
            <input type="text" name="premios" id="premios"/ value="{{old('awards')}}">
        </div>
        <div>
            <label for="duracion">Duracion</label>
            <input type="text" name="duracion" id="duracion"/>
        </div>
        <div>
            <label>Fecha de Estreno</label>
            <select name="dia">
                <option value="">Dia</option>
                <?php for ($i=1; $i < 32; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
            <select name="mes">
                <option value="">Mes</option>
                <?php for ($i=1; $i < 13; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
            <select name="anio">
                <option value="">Anio</option>
                <?php for ($i=1900; $i < 2017; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" value="Agregar Pelicula" name="submit"/>
    </form>
  </body>
</html>
