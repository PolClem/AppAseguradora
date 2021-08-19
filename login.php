<?php
//Llamo a la conexión.
include 'conexion.php';

//Recopilo los datos desde las variables.
if (isset ($_POST ['userName'])) {
    $usuario = $_POST['userName'];
}
if (isset ($_POST ['password'])) {
    $password = $_POST['password'];
}


//Haciendo la consulta
$sql = "SELECT count(*) as filas FROM usuarios WHERE userName = '$usuario' and password = '$password'";

$query = mysqli_query ($conexion, $sql);
// var_dump($query);
// return 
// $nr = mysqli_num_rows($query);


//Verifico los datos
if ($query){
    $array = mysqli_fetch_array ($query);
    if ($array ['filas'] == 1){
        $_SESSION ['userName'] = $usuario;
        header("location:inicio.php");
    }
}

//Libero la variable
mysqli_free_result($query);

//Cierro la conexion
mysqli_close($conexion);
