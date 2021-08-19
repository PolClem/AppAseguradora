<?php
//Llamo a la conexión.
include 'conexion.php';
$clientes = "SELECT * FROM clientes";
$vehiculos = "SELECT * FROM vehiculos";
$seguros = "SELECT * FROM seguros";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
</head>
<body>
    <button onclick = "location.href='inicio.php'" type="submit" id="cerrarFormulario" class="btn btn-primary">
        X
    </button>
    
    <main>
        <section>
            <div class = " col-m-12">
                <table class = "table">
                    <thead class = "table-success table-striped">
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Número Cliente</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Domicilio</th>
                            <th>Teléfono</th>
                            <th>Provincia</th>
                            <th>Ciudad</th>
                            <th>Marca</th>
                            <th>Año</th>
                            <th>Patente</th>
                            <th>Número de Chasis</th>
                            <th>Tipo</th>
                            <th>Modelo</th>
                            <th>Número de Motor</th>
                            <th>Destino</th>
                            <th>Zona de Riesgo</th>
                            <th>Número de Póliza</th>
                            <th>Tipo</th>
                            
                        </tr>
                    </thead>
                    <tbody id = cuerpoTabla>
                        <?php 
                            $resultado = mysqli_query ($conexion, $clientes);
                            while ($row = mysqli_fetch_assoc ($resultado)){
                                
                        ?>
                            <tr>
                                <th><a href="actualizar.php?id = <?php echo $row ['id_cliente']; ?>" class = "btn btn-info" id = "botonEditar">Editar</a></th>
                                <th><a href="delete.php?id = <?php echo $row ['id_cliente']; ?>" class = "btn btn-danger" id = "botonEliminar">Eliminar</a></th>

                                <th><?php echo $row ["id_cliente"]; ?></th>
                                <th><?php echo $row ['nombre']; ?></th>
                                <th><?php echo $row ['apellido']; ?></th>
                                <th><?php echo $row ['dni']; ?></th>
                                <th><?php echo $row ['domicilio']; ?></th>
                                <th><?php echo $row ['telefono']; ?></th>
                                <th><?php echo $row ['provincia']; ?></th>
                                <th><?php echo $row ['ciudad']; ?></th>
                                <?php
                                    }
                                ?>
                                <?php 
                                    $resultado2 = mysqli_query ($conexion,$vehiculos);
                                    while ($row = mysqli_fetch_array ($resultado2)){
                                ?>
                                <th><?php echo $row ['marca']; ?></th>
                                <th><?php echo $row ['anio']; ?></th>
                                <th><?php echo $row ['patente']; ?></th>
                                <th><?php echo $row ['numeroChasis']; ?></th>
                                <th><?php echo $row ['tipo_vehiculo']; ?></th>
                                <th><?php echo $row ['modelo']; ?></th>
                                <th><?php echo $row ['numeroMotor']; ?></th>
                                <th><?php echo $row ['destino']; ?></th>
                                <th><?php echo $row ['zonaRiesgo']; ?></th>
                                <?php
                                    }
                                ?>
                                <?php 
                                    $resultado3 = mysqli_query ($conexion, $seguros);
                                    while ($row = mysqli_fetch_assoc ($resultado3)){
                                ?>        
                                <th><?php echo $row ['polizaNumero']; ?></th>
                                <th><?php echo $row ['tipo_seguro']; ?></th>

                                
                            </tr>
                                <?php
                                    }mysqli_free_result ($resultado);
                                    mysqli_free_result ($resultado2);
                                    mysqli_free_result ($resultado3);
                                ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
</body>
</html>