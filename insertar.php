<?php>
//Llamo a la conexión.
include 'conexion.php';

//Asigno los valores de cliente
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$dni = $_POST ['dni'];
$domicilio = $_POST ['domicilio'];
$telefono = $_POST ['telefono'];
$provincia = $_POST ['provincia'];
$ciudad = $_POST ['ciudad'];

//Asigno los valores del vehículo
$marca = $_POST ['marca'];
$anio = $_POST ['anio'];
$patente = $_POST ['patente'];
$numeroChasis = $_POST ['numeroChasis'];
$tipo_vehiculo = $_POST ['tipo_vehiculo'];
$modelo = $_POST ['modelo'];
$numeroMotor = $_POST ['numeroMotor'];
$destino = $_POST ['destino'];
$zonaRiesgo = $_POST ['zonaRiesgo'];

//Asigno los valores del seguro
$polizaNumero = $_POST ['polizaNumero'];
$tipo_seguro = $_POST ['tipo_seguro'];

$sqlCli = "INSERT INTO clientes VALUES  ('$nombre', '$apellido', '$dni', '$domicilio', '$telefono', '$provincia', '$ciudad')";
$query = mysqli_query ($con, $sqlCli);
if($query == 1){
    $sqlVehi = "INSERT INTO vehiculos VALUES  ('$marca', '$anio', '$patente', '$numeroChasis', '$tipo', '$modelo', '$numeroMotor', '$destino', '$zonaRiesgo')";
    $query2 = mysqli_query ($con, $sqlVehi);
    if($query2 == 1){
        $sqlSeg = ("INSERT INTO seguros VALUES ('$polizaNumero', '$tipo')");
        $query3 = mysqli_query ($con, $sqlSeg);
        header('locartion: consulta.php');
    }else{
        echo "No se pudo realizar la inserción";
    }

}else{
    echo "No se pudo realizar la inserción";
};


?>
