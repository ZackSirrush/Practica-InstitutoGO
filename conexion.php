<<<<<<< HEAD
<?php

    $dbhost="localhost"; //Nombre del host
    $dbuser="root"; //Nombre de usuario
    $dbpass=""; //Contraseña
    $dbname="igo_db"; //Nombre de la base de datos

    $conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);  
    
    if(!$conn)
    {
        die("Conexión denegada: ".mysqli_connect_error());
    }  

?>
=======
<?php

    $dbhost="localhost"; //Nombre del host
    $dbuser="root"; //Nombre de usuario
    $dbpass=""; //Contraseña
    $dbname="igo_db"; //Nombre de la base de datos

    $conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);  
    
    if(!$conn)
    {
        die("Conexión denegada: ".mysqli_connect_error());
    }  

?>
>>>>>>> 8d2e818da51b76ede411b462ab63804e0b63a099
