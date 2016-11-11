<?php include "php/cabecera.inc" ?>
<?php

$con = mysqli_connect("localhost","root","","tiendaonline");



mysqli_set_charset($con, "utf8");
$peticion = "SELECT * FROM productos";
$resultado = mysqli_query($con, $peticion);
while($fila = mysqli_fetch_array($resultado)){
  echo "<article>";
  echo "<a href='producto.php?id=".$fila['id']."'><h3>".$fila['nombre']."</h3></a>";
  echo "<p>".$fila['descripcion']."</p>";
  echo "<p> Precio: ".$fila['precio']."$</p>";

//$peticion2 = "SELECT * FROM imagenesproducto WHERE idproducto =" .$fila['id']."LIMIT 1"; //imagenes

$peticion2 = "SELECT * FROM imagenesproducto WHERE idproducto=" .$fila['id'];

$resultado2 = mysqli_query($con, $peticion2);






while ($fila2 = mysqli_fetch_array($resultado2)) {
  echo "<img scr='photo/".$fila2['imagen']."' width=100px>";
}
echo "<br>";
echo "<a href='producto.php?id=".$fila['id']."'><button>mas informacion</button></a>";

echo "<button value='".$fila ['id']."'class='botoncompra'>comprar ahora</button>";

  echo "</article>";
}
mysqli_close($con);
?>


<?php include "php/piedepagina.inc" ?>
