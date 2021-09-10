<?php

    //Llamo a la conexión.
    require 'conexion.php';

    //var_dump($_GET);    
    $idCliente = $_GET['id'];

    $sql = "DELETE FROM clientes WHERE id_cliente = '$idCliente'";
    $query = mysqli_query($conexion, $sql);

    if ($query){
        header("location: consulta.php");
    }else{
        echo 'Error'.mysqli_errno($conexion);
    }



?>