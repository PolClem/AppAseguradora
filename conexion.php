<?php
    //Conectando a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "aseguradora");
    mysqli_set_charset ($conexion, "utf8");

    //Verificando conexión a la base de datos
    if (!$conexion){
        die ("No hay conexión".mysqli_connect_error());
    }else{
        echo ("Conectado");
    }
