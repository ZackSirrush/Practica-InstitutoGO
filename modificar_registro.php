<<<<<<< HEAD
<?php
require 'conexion.php';

$nombre = $_POST["nombre"]; //retoma los valores incorporados en el formulario "editar"
$apaterno = $_POST["apaterno"];
$amaterno = $_POST["amaterno"];
$curp = $_POST["curp"];
$fechanac = $_POST["fnac"];
$estado = $_POST["estado"];
$grado = $_POST["grado"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

$consulta=mysqli_query($conn,"UPDATE inscripciones SET curp='$curp', nombre='$nombre',
 apaterno='$apaterno', amaterno='$amaterno',fechanac='$fechanac', grado='$grado', telefono='$telefono',
 correo='$correo' WHERE curp='$curp'"); //Cambia los valores de la base de datos por los valores que se encuentran en el formulario

 echo "<script> alert ('El usuario con el CURP $curp se ha modificado'); window.location='consultar.php' </script>"; //Recarga la página con los registros para ser modificados.

=======
<?php
require 'conexion.php';

$nombre = $_POST["nombre"]; //retoma los valores incorporados en el formulario "editar"
$apaterno = $_POST["apaterno"];
$amaterno = $_POST["amaterno"];
$curp = $_POST["curp"];
$fechanac = $_POST["fnac"];
$estado = $_POST["estado"];
$grado = $_POST["grado"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

$consulta=mysqli_query($conn,"UPDATE inscripciones SET curp='$curp', nombre='$nombre',
 apaterno='$apaterno', amaterno='$amaterno',fechanac='$fechanac', grado='$grado', telefono='$telefono',
 correo='$correo' WHERE curp='$curp'"); //Cambia los valores de la base de datos por los valores que se encuentran en el formulario

 echo "<script> alert ('El usuario con el CURP $curp se ha modificado'); window.location='consultar.php' </script>"; //Recarga la página con los registros para ser modificados.

>>>>>>> 8d2e818da51b76ede411b462ab63804e0b63a099
?>