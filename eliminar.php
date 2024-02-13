<<<<<<< HEAD
<?php

$curp=$_GET['curp']; //Recibe el valor del curp seleccionado

require 'conexion.php';

$consulta=mysqli_query($conn,"DELETE FROM inscripciones WHERE curp='$curp'"); //Realiza la consulta sql DELETE

echo "<script> alert ('El registro con el CURP: $curp se ha eliminado correctamente'); window.location='consultar.php' </script>";
 //Muestra mensaje que indica cuál registro se ha eliminado
=======
<?php

$curp=$_GET['curp']; //Recibe el valor del curp seleccionado

require 'conexion.php';

$consulta=mysqli_query($conn,"DELETE FROM inscripciones WHERE curp='$curp'"); //Realiza la consulta sql DELETE

echo "<script> alert ('El registro con el CURP: $curp se ha eliminado correctamente'); window.location='consultar.php' </script>";
 //Muestra mensaje que indica cuál registro se ha eliminado
>>>>>>> 8d2e818da51b76ede411b462ab63804e0b63a099
?>