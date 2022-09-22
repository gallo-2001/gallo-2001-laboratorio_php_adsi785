<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="cabecera" >

<form action="./servidor.php" method="post">
<div class="mb-3">
  <label for="nombre" class="form-label">Nombre vendedor:</label>
  <input type="text" class="form-control" id="nombre"  name="nombre">
  <BR>
   <BR>
</div>

<div class="mb-3">
  <label for="cantidadA" class="form-label">Cantidad automoviles vendidos:</label>
  <input type="text" class="form-control" id="cantidadA"  name="cantidadA">
  <BR>
   <BR></div>
<div class="mb-3">
  <label for="precioT" class="form-label">Precio total automoviles vendidos:</label>
  <input type="text" class="form-control" id="precioT"  name="precioT">
  <BR>
   <BR>
</div>


<div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>

</form>
</body>

</html>