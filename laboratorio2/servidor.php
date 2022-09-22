<center><H1>Calcular el salario de un vendedor</H1></CENTER>
<?php
 
 $nombre=$_POST['nombre'];
 $cantidad=$_POST['cantidadA'];
 $precioTotal=$_POST['precioT'];
 
 
 echo "El nombre del vendedor es: $nombre";
 echo "La cantidad de automoviles vendidos es: $cantidad";
 echo "El precio total de automoviles vendidos es: $precioTotal";
 
 $salarioBasico=737000;
 $comision=$cantidad*50000;
 $porcentajeVenta=$precioTotal*0.05;
 $salario=$salarioBasico+$comision+$porcentajeVenta;

 echo "El salario del vendedor es: $salario";
 
?>