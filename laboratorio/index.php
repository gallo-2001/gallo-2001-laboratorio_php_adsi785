<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Calcular Definitiva</title>
</head>
<body class="cabecera">
    <form action="./resultados.php" method="post">
<div class="mb-3">
  <label for="parcial1" class="form-label">Parcial 1:</label>
  <input type="number" class="form-control" id="parcial1" placeholder="Primer parcial" name="parcial1">
</div>
<div class="mb-3">
  <label for="parcial2" class="form-label">Parcial 2:</label>
  <input type="number" class="form-control" id="parcial2" placeholder="Segundo parcial" name="parcial2">
  <div class="mb-3">
  <label for="parcial3" class="form-label">Parcial 3:</label>
  <input type="number" class="form-control" id="parcial3" placeholder="Tercer parcial"name="parcial3">
</div>
<div class="mb-3">
  <label for="examenf" class="form-label">Examen final:</label>
  <input type="number" class="form-control" id="examenf" placeholder="Examen final"name="examenf">
</div> 
<div class="mb-3">
  <label for="trabajof" class="form-label">Trabajo final:</label>
  <input type="number" class="form-control" id="trabajof" placeholder="Trabajo final"name="trabajof">
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>



</form>




</body>
</html>