<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    try{

        $base=new PDO("mysql:host=localhost; dbname=espacio_interior" , "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM USUARIO_PASS WHERE USUARIO= :introducir_email AND PASSWORD= :introducir_contrasena";
        $resultado=$base->prepare($sql);
        $login=htmlentities(addslashes($_POST["introducir_email"]));
        $password=htmlentities(addslashes($_POST["introducir_contrasena"]));
        $resultado->bindValue(":introducir_email", $login);
        $resultado->bindValue(":introducir_contrasena", $password);
        $resultado->execute();
        $numero_registro=$resultado->rowCount();
        if ($numero_registro!=0) {
            //echo("adelante");
            session_start();
            $_SESSION["introducir_email"]=$_POST["introducir_email"];
            header("location:administrador.php");
            
        }else{
            //echo("contraseña no válida");
            header("location:../index.php");
        }


    }catch (Exception $e){
        die("Error: " . $e->getMessage());
    }

    ?>
</body>
</html>