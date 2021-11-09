<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alta Cliente</title>
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
    <form id="altas" action="insertar.php" method="POST" autocomplete = "on">
      <div class="form-row">
        <div class="form-group container col-md-3">
          <h2>Datos del Cliente</h2>
          <label for="inputNombre">Nombre</label>
          <input
            type="text"
            class="form-control"
            id="inputNombre"
            name = "nombre"
            placeholder="Nombre"
          />
          <label for="inputApellido">Apellido</label>
          <input
            type="text"
            class="form-control"
            id="inputApellido"
            name = "apellido"
            placeholder="Apellido"
          />
          <label for="inputDni">DNI</label>
          <input
            type="number"
            class="form-control"
            id="inputDni"
            name = "dni"
            placeholder="DNI"
          />
          <label for="inputDomicilio">Domicilio</label>
          <input
            type="text"
            class="form-control"
            id="inputDomicilio"
            name = "domicilio"
            placeholder="Domicilio"
          />
          <label for="inputTelefono">Teléfono</label>
          <input
            type="number"
            class="form-control"
            id="inputTelefono"
            name = "telefono"
            placeholder="Telefono"
            value = "<?php echo $row['telefono'];?>"
          />
          <label for="inputProvincia">Provincia</label>
          <input
            type="text"
            class="form-control"
            id="inputProvincia"
            name = "provincia"
            placeholder="Provincia"
          />
          <label for="inputCiudad">Ciudad</label>
          <input
            type="text"
            class="form-control"
            id="inputCiudad"
            name = "ciudad"
            placeholder="Ciudad"
          />
        </div>
      </div>
      <!-- <div class="form-row">
        <div class="form-group container col-md-6">
          <h2>Datos del vehiculo</h2>
          <label for="inputMarca">Marca</label>
            <input
              type="text"
              class="form-control"
              id="inputMarca"
              name = "marca"
              placeholder="Marca"
            />
            <label for="inputAño">Año</label>
            <input
              type="number"
              class="form-control"
              id="inputAño"
              name = "anio"
              placeholder="Año"
            />
            <label for="inputPatente">Patente</label>
            <input
              type="text"
              class="form-control"
              id="inputPatente"
              name = "patente"
              placeholder="Patente"
            />
            <label for="inputNroChasis">Número de Chasis</label>
            <input
              type="text"
              class="form-control"
              id="inputNroChasis"
              name = "numeroChasis"
              placeholder="Número de Chasis"
            />
            <label for="inputTipoDeVehiculo">Tipo de Vehiculo</label>
            <input
              type="text"
              class="form-control"
              id="inputTipoDeVehiculo"
              name = "tipo"
              placeholder="Tipo de Vehiculo"
            />
            <label for="inputModelo">Modelo</label>
            <input
              type="text"
              class="form-control"
              id="inputModelo"
              name = "modelo"
              placeholder="Modelo"
            />
            <label for="inputNroMotor">Número de Motor</label>
            <input
              type="text"
              class="form-control"
              id="inputNroMotor"
              name = "numeroMotor"
              placeholder="Número de Motor"
            />
            <label for="inputDestino">Destino</label>
            <input
              type="text"
              class="form-control"
              id="inputDestino"
              name = "destino"
              placeholder="Particular - Empresa - Remis"
            />
            <label for="inputZonaRiesgo">Zona de Riesgo</label>
            <input
              type="text"
              class="form-control"
              id="inputZonaRiesgo"
              name = "zonaRiesgo"
              placeholder="Si - No"
            />
          </div>
        </div> -->
      
      <!-- <div class="form-row">
        <div class="form-group container col-md-3">
          <h2>Tipo de Seguro</h2>
          <label for="inputNroPoliza">Poliza Número</label>
          <input type="text" class="form-control" id="inputNroPoliza" name = "polizaNumero" />
          <label for="inputTipoPoliza">Tipo de Poliza</label>
          <select id="inputTipoPoliza" class="form-control" name = "tipo">
            <option selected>Básica</option>
            <option>Media</option>
            <option>Total</option>
          </select>
          
        </div>
      </div> -->
      <button type="submit" id="cargaFormulario" class="btn btn-primary">
        Enviar
      </button>
    </form>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
    <script>
      let cerrar = document.getElementById ('cerrarFormulario').addEventListener (click, () =>{

      })
    </script>
  </body>
</html>
