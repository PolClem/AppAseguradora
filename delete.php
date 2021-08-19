<?php

    //Llamo a la conexión.
    include 'conexion.php';

    $idCliente = $_GET ['id_cliente'];

    $sql = "DELETE FROM clientes WHERE id_cliente = '$idCliente'";
    $query = mysqli_query ($conexion, $sql);

    if ($query){
        Header ("Location: consulta.php");
    }



?>