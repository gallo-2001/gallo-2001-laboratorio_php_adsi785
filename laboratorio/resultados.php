<html>
<head>
<link rel="stylesheet" href="style.css/stilos.css">
<title>Nota final</title>
</head>
<body class="cabecera">
    <div class="color">
<p>RESULTADOS</p>
<?php 
$nota1= $_POST ["parcial1"];
$nota2= $_POST ["parcial2"];
$nota3= $_POST ["parcial3"];
$nota4= $_POST ["examenf"];
$nota5= $_POST ["trabajof"];
$Def1=(($nota1+$nota2+$nota3)/3)*1.35;
$Def2=$nota4*1.35;
$Def3=$nota5*1.30;
$DefTotal=($Def1+$Def2+$Def3)/3;
if ($DefTotal>=3)
{
 $mensaje = "APROBADO";
}
else
{
 $mensaje="REPROBADO";
}
?>
Su Definitiva Es: <?php echo $DefTotal, $mensaje ?>
</div>

</body>
</html>