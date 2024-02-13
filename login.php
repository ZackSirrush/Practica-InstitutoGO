<<<<<<< HEAD
<?php

    include("conexion.php");

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    
    //Login
    if(isset($_POST["iniciar"]))
    {
        $query=mysqli_query($conn, "SELECT * FROM login WHERE usuario = '$usuario' and password = '$password'"); 
        
        $nr=mysqli_num_rows($query);

        if($nr==1)
        {
            echo "<script> alert ('Bienvenido, $usuario'); window.location='admin.php' </script>";
        } else
        {
            echo "<script> alert ('Usuario inexistente'); window.location='accesousr.php' </script>";
        }

    }
    
    
=======
<?php

    include("conexion.php");

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    
    //Login
    if(isset($_POST["iniciar"]))
    {
        $query=mysqli_query($conn, "SELECT * FROM login WHERE usuario = '$usuario' and password = '$password'"); 
        
        $nr=mysqli_num_rows($query);

        if($nr==1)
        {
            echo "<script> alert ('Bienvenido, $usuario'); window.location='admin.php' </script>";
        } else
        {
            echo "<script> alert ('Usuario inexistente'); window.location='accesousr.php' </script>";
        }

    }
    
    
>>>>>>> 8d2e818da51b76ede411b462ab63804e0b63a099
?>