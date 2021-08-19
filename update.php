<?php
    //Llamo a la conexión.
    include 'conexion.php';

    $fila= mysql_fetch_array ($datos);
    $idCliente = $_GET ['id_cliente'];

    $nombre = $_POST ['nombre'];
    $apellido = $_POST ['apellido'];
    $dni = $_POST ['dni'];
    $domicilio = $_POST ['domicilio'];
    $telefono = $_POST ['telefono'];
    $provincia = $_POST ['provincia'];
    $ciudad = $_POST ['ciudad'];

    
    $marca = $_POST ['marca'];
    $anio = $_POST ['anio'];
    $patente = $_POST ['patente'];
    $numeroChasis = $_POST ['numeroChasis'];
    $tipo_vehiculo = $_POST ['tipo_vehiculo'];
    $modelo = $_POST ['modelo'];
    $numeroMotor = $_POST ['numeroMotor'];
    $destino = $_POST ['destino'];
    $zonaRiesgo = $_POST ['zonaRiesgo'];

    
    $polizaNumero = $_POST ['polizaNumero'];
    $tipo_seguro = $_POST ['tipo_seguro'];

    $sql = "UPDATE cliente SET nombre = '$nombre', apellido = '$apellido', dni = '$dni', domicilio = '$domicilio', telefono = '$telefono', provinvia = '$provincia', ciudad = '$ciudad' WHERE id_cliente = '$idCliente'";
    $sql2 = "UPDATE vehiculo SET marca = '$marca', ani = '$anio', patente = '$patente', numeroChasis = '$numeroChasis', tipo_vehiculo = '$tipo_vehiculo', modelo = '$modelo', numeroMotor = '$numeroMotor', destino = ' $destino', zonaRiesgo = '$zonaRiesgo'  WHERE  patente = '$patente'";
    $sql3 = "UPDATE seguros SET polizaNumero = '$polizaNumero', tipo_seguro = '$tipo_seguro' WHERE polizaNumero = '$polizaNumero'";

    $query = mysqli_query ($conexion, $sql);
    if ($query){
        $query = mysqli_query ($conexion, $sql2);
        if ($query){
            $query = mysqli_query ($conexion, $sql3);
            if ($query){
                Header ("Location: consulta.php");
            }
        }
    }
?>