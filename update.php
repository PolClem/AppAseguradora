<?php
    //Llamo a la conexión.
    require 'conexion.php';
   
    
    $idCliente = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $domicilio = $_POST['domicilio'];
    $telefono = $_POST['telefono'];
    $provincia = $_POST['provincia'];
    $ciudad = $_POST['ciudad'];

    
    // $marca = $_POST ['marca'];
    // $anio = $_POST ['anio'];
    // $patente = $_POST ['patente'];
    // $numeroChasis = $_POST ['numeroChasis'];
    // $tipo_vehiculo = $_POST ['tipo_vehiculo'];
    // $modelo = $_POST ['modelo'];
    // $numeroMotor = $_POST ['numeroMotor'];
    // $destino = $_POST ['destino'];
    // $zonaRiesgo = $_POST ['zonaRiesgo'];

    
    // $polizaNumero = $_POST ['polizaNumero'];
    // $tipo_seguro = $_POST ['tipo_seguro'];

    $sql = "UPDATE clientes SET id_cliente = '$idCliente', nombre='$nombre', apellido='$apellido', dni='$dni', domicilio='$domicilio', telefono= '$telefono', provinvia='$provincia', ciudad='$ciudad' WHERE id_cliente='$idCliente'";
    // $sql2 = "UPDATE vehiculos SET marca = '$marca', ani = '$anio', patente = '$patente', numeroChasis = '$numeroChasis', tipo_vehiculo = '$tipo_vehiculo', modelo = '$modelo', numeroMotor = '$numeroMotor', destino = ' $destino', zonaRiesgo = '$zonaRiesgo'  WHERE  patente = '$patente'";
    // $sql3 = "UPDATE seguros SET polizaNumero = '$polizaNumero', tipo_seguro = '$tipo_seguro' WHERE polizaNumero = '$polizaNumero'";

    $query = mysqli_query ($conexion, $sql);
    if ($query){ 
        header("location: consulta.php");
    }else{
        echo 'Error'.mysqli_errno($conexion);
    }
?>