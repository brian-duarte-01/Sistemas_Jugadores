<?php
include('Conexion.php');
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$rol = $_POST['rol'];


$sql= $con -> query("select * from usuario where usuario = '$usuario' and password = '$password' AND rol = '$rol'");
$nr = mysqli_num_rows($sql);

if($nr==1){
    if($rol == 0){
        echo "<script>
            location.href='../vista/admin.php'
        </script>";
        }
        if($rol== 1){
            echo "<script>
            location.href='dashboard.php'
        </script>";
        }
}
else{
    echo "<script>
            location.href='../vista/login.php'
            confirm('contraseña inmcorrecta');
        </script>";
}


?>