<<<<<<< HEAD
<?php
//Inscripciones
//incluye la conexión a base de datos
include("conexion.php");

//recupera variables
$nombre = $_POST["nombre"];
$apaterno = $_POST["apaterno"];
$amaterno = $_POST["amaterno"];
$curp = $_POST["curp"];
$fechanac = $_POST["fnac"];
$estado = $_POST["estado"];
$grado = $_POST["grado"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
try{

    if(isset($_POST["registrar"])){//Al presionar el botón "enviar" compara datos vacíos
        
        if(!empty($nombre) || !empty($apaterno) || !empty($amaterno) || !empty($curp) || !empty($fechanac) || !empty($estado)
        || !empty($grado) || !empty($telefono) || !empty($correo)){
            //Sí ninguno está vacío, compara la edad
            
            $date=getdate(); //Obtiene la fecha actual
            $anioact=$date["year"]; //separa ´por día, mes y año
            $mesact = $date["mon"];
            $diaact = $date["mday"];

            list( $anionac, $mesnac, $dianac ) = explode('-', $fechanac); //Separa en una lista la fecha dada
            
            $edad = $anioact - $anionac; //resta el año de nacimiento menos el año actual
            if ($mesact < $mesnac){ //si el mes actual es menor al mes de registro
                $edad--; //El alumno tiene un año menos
            } else if ($mesact == $mesnac){ //si el mes actual es igual al mes de nacimiento
                if ($diaact < $dianac){ //si el día actual es menor al dia de nacimiento
                    $edad--; //quita un año al año de nacimiento
                }
            }
            
            if($edad>=6 and $edad<=13){ //Sí la diferencia es mayor o igual a 6 y menor o igual a 13        
                
                echo "<script> alert ('El alumno se encuentra en la edad óptima de registro, tiene $edad años'); </script>"; //mensaje con la edad del alumno
                $query1=mysqli_query($conn, "SELECT curp FROM inscripciones WHERE curp = '$curp'"); //Busca el curp en la base de datos
                
                $nr2=mysqli_num_rows($query1); //Enlista las columnas obtenidas de la consulta

                if($nr2==1){ //Sí existe la curp en la base de datos    
                    echo "<script> alert ('El alumno con la CURP $curp ya se encuentra registrado, operación cancelada'); window.history.go(-1);</script>";
                    //indica que el alumno ya ha sido registrado                         
                } else { //de lo contrario ejecuta la sentencia insert
                    $sql="INSERT INTO inscripciones(curp, nombre, apaterno, amaterno, fechanac, grado, telefono, correo, estado) VALUES ('$curp','$nombre','$apaterno','$amaterno','$fechanac','$grado','$telefono','$correo','$estado')";
                    $query2=mysqli_query($conn,$sql);
                    if(!$query2){
                        echo "Error inesperado";
                    } else {
                        echo "<script> alert ('Alumno registrado con éxito'); window.location='inscripciones.php'</script>"; //Regresa a la página de inscripcion
                    }
                }      
            } else { //Si la fecha de nacimiento es menor a 6 años y mayor a 13 niega la inscripción
                echo "<script> alert ('El alumno no cuenta con la edad para ser registrado, tiene $edad años'); window.history.go(-1);</script>";
            }
        } else { //Sí hay campos vacíos indica que se deben llenar todos los datos.
            echo "<script> alert ('Todos los datos son obligatorios'); window.history.go(-1);</script>";
        }
    }
}catch (Exception $e){
    echo "<script> alert ('Ha ocurrido un error inesperado: .$e->getMessage()'); window.history.go(-1);</script>";
    
}

=======
<?php
//Inscripciones
//incluye la conexión a base de datos
include("conexion.php");

//recupera variables
$nombre = $_POST["nombre"];
$apaterno = $_POST["apaterno"];
$amaterno = $_POST["amaterno"];
$curp = $_POST["curp"];
$fechanac = $_POST["fnac"];
$estado = $_POST["estado"];
$grado = $_POST["grado"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
try{

    if(isset($_POST["registrar"])){//Al presionar el botón "enviar" compara datos vacíos
        
        if(!empty($nombre) || !empty($apaterno) || !empty($amaterno) || !empty($curp) || !empty($fechanac) || !empty($estado)
        || !empty($grado) || !empty($telefono) || !empty($correo)){
            //Sí ninguno está vacío, compara la edad
            
            $date=getdate(); //Obtiene la fecha actual
            $anioact=$date["year"]; //separa ´por día, mes y año
            $mesact = $date["mon"];
            $diaact = $date["mday"];

            list( $anionac, $mesnac, $dianac ) = explode('-', $fechanac); //Separa en una lista la fecha dada
            
            $edad = $anioact - $anionac; //resta el año de nacimiento menos el año actual
            if ($mesact < $mesnac){ //si el mes actual es menor al mes de registro
                $edad--; //El alumno tiene un año menos
            } else if ($mesact == $mesnac){ //si el mes actual es igual al mes de nacimiento
                if ($diaact < $dianac){ //si el día actual es menor al dia de nacimiento
                    $edad--; //quita un año al año de nacimiento
                }
            }
            
            if($edad>=6 and $edad<=13){ //Sí la diferencia es mayor o igual a 6 y menor o igual a 13        
                
                echo "<script> alert ('El alumno se encuentra en la edad óptima de registro, tiene $edad años'); </script>"; //mensaje con la edad del alumno
                $query1=mysqli_query($conn, "SELECT curp FROM inscripciones WHERE curp = '$curp'"); //Busca el curp en la base de datos
                
                $nr2=mysqli_num_rows($query1); //Enlista las columnas obtenidas de la consulta

                if($nr2==1){ //Sí existe la curp en la base de datos    
                    echo "<script> alert ('El alumno con la CURP $curp ya se encuentra registrado, operación cancelada'); window.history.go(-1);</script>";
                    //indica que el alumno ya ha sido registrado                         
                } else { //de lo contrario ejecuta la sentencia insert
                    $sql="INSERT INTO inscripciones(curp, nombre, apaterno, amaterno, fechanac, grado, telefono, correo, estado) VALUES ('$curp','$nombre','$apaterno','$amaterno','$fechanac','$grado','$telefono','$correo','$estado')";
                    $query2=mysqli_query($conn,$sql);
                    if(!$query2){
                        echo "Error inesperado";
                    } else {
                        echo "<script> alert ('Alumno registrado con éxito'); window.location='inscripciones.php'</script>"; //Regresa a la página de inscripcion
                    }
                }      
            } else { //Si la fecha de nacimiento es menor a 6 años y mayor a 13 niega la inscripción
                echo "<script> alert ('El alumno no cuenta con la edad para ser registrado, tiene $edad años'); window.history.go(-1);</script>";
            }
        } else { //Sí hay campos vacíos indica que se deben llenar todos los datos.
            echo "<script> alert ('Todos los datos son obligatorios'); window.history.go(-1);</script>";
        }
    }
}catch (Exception $e){
    echo "<script> alert ('Ha ocurrido un error inesperado: .$e->getMessage()'); window.history.go(-1);</script>";
    
}

>>>>>>> 8d2e818da51b76ede411b462ab63804e0b63a099
?>